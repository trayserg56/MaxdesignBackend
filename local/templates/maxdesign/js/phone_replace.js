console.log('replace started');
// settings
const  cookieLifetime = 60 * 60 * 24 * 30;
// set to false if you don't want to change phone
const changePhone = false;
// set to false if you don't want to change email
const changeEmail = false;

const referrer = document.referrer;

const url = new URL(window.location.href);
let phone, email;


// checking cookies

// checking cookies
let utm_source = url.searchParams.get('utm_source') ? url.searchParams.get('utm_source') : getCookie('utm_source');
let utm_medium = url.searchParams.get('utm_medium') ? url.searchParams.get('utm_medium') :getCookie('utm_medium');
let utm_campaign = url.searchParams.get('utm_campaign') ? url.searchParams.get('utm_campaign') : getCookie('utm_campaign');
let utm_content = url.searchParams.get('utm_content') ? url.searchParams.get('utm_content') : getCookie('utm_content');

if (utm_source === null) {
    utm_source = getRefererSource(referrer);
    console.log('getting source from function', utm_source);
    switch (utm_source) {
        case 'yandex' :
        case 'google' :
        case 'mail' :
        case 'rambler' :
        case 'ask' :
        case 'yahoo' :
            utm_medium = 'organic';
            break;
        case 'direct' :
            utm_medium = 'none';
            break;
        default :
            utm_medium = 'partner';
            break;
    }

}
setCookie('utm_source',utm_source,cookieLifetime);
setCookie('utm_medium',utm_medium,cookieLifetime);
setCookie('utm_campaign',utm_campaign,cookieLifetime);
setCookie('utm_content',utm_content,cookieLifetime);

if (utm_source === 'yandex' && utm_medium === 'search') {
    phone = '+7 (929) 176-14-91';
    email = 'direct@maxdesign.pro';
} else if (utm_source === 'yandex' && utm_medium === 'context') {
    phone = '+7 (929) 176-14-95';
    email = 'rsa@maxdesign.pro';
} else if (utm_source === 'google' && utm_medium === 'search') {
    phone = '+7 (929) 176-14-98';
    email = 'adwords@maxdesign.pro';
} else if (utm_source === 'google' && utm_medium === 'context') {
    phone = '+7 (929) 176-15-29';
    email = 'kms@maxdesign.pro';
} else {
    phone = '+7 (929) 176-13-05';
    email = 'info@maxdesign.pro';
}


//document.addEventListener("DOMContentLoaded",(e) => {
    const phoneSelector = document.querySelectorAll('.phone--track');
    const emailSelector = document.querySelectorAll('.email--track');
	console.log('replace ready');
    if (phone !== undefined && changePhone === true && phoneSelector.length) {
        phoneSelector.forEach(function(el) {
            el.setAttribute('href','tel:' + phone);
            el.innerText = phone;
        })
    }
    if (email !== undefined && changeEmail === true && emailSelector.length) {
        emailSelector.forEach(function(el) {
            el.setAttribute('href','mailto:' + email);
            el.innerText = email;
        })
    }
	const utmValues = [
        {name : 'utm_source', value : utm_source},
        {name : 'utm_medium', value : utm_medium},
        {name : 'utm_content', value : utm_content},
        {name : 'utm_campaign', value : utm_campaign},
    ]
	document.addEventListener("submit", (e) => {
        if(e.target && e.target.matches("form")){
            for (let i in utmValues) {
                let inputField = document.createElement('input');
                inputField.setAttribute('type', 'hidden');
                inputField.setAttribute('name', utmValues[i].name);
                inputField.setAttribute('value', utmValues[i].value);
                e.target.appendChild(inputField);
            }
        }
    })
//})




function setCookie(name,value,days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i=0;i < ca.length;i++) {
        let c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function getRefererSource(referrer) {
    let source;
    if (referrer.indexOf('yandex.ru') !== -1 || referrer.indexOf('yandex.ua') !== -1) {
        source = 'yandex';
    } else if (referrer.indexOf('www.google.') !== -1) {
        source = 'google';
    } else if (referrer.indexOf('go.mail.ru/search') !== -1) {
        source = 'mail';
    } else if (referrer.indexOf('nova.rambler.ru/search') !== -1) {
        source = 'rambler';
    } else if (referrer.indexOf('nova.rambler.ru/search') !== -1) {
        source = 'rambler';
    } else if (referrer.indexOf('ask.com/web?q=') !== -1) {
        source = 'ask';
    } else if (referrer.indexOf('search.yahoo.com/search') !== -1) {
        source = 'yahoo';
    } else {
        if (referrer === '') {
            source = 'direct';
        } else {
            source = window.location.hostname;
        }
    }
    return source;
}

