$(function(){
    if($('#portfoli-viewer').length > 0){
        const viewer = new Viewer(document.getElementById('portfoli-viewer'),{
            movable: false,
            title: false,
            toolbar: false
        });
    }
})
$(function(){
    if($('#blog-viewer').length > 0){
        const viewer = new Viewer(document.getElementById('blog-viewer'),{
            movable: false,
            title: false,
            toolbar: false
        });
    }
})
$(function() {
    $(document).on('click', '.total', function(){
            $(".list_tab").addClass("act");
            $(".total").addClass("act");
    });
        $(document).on('click', '.total.act', function(){
            $(".list_tab").removeClass("act");
            $(".total").removeClass("act");
    });
$('.list_tab').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
  });
})
$(function(){
    function closeCC(){
        $('.cc-modal').fadeOut();
        $('body').css('overflow', 'unset');
    }
    function openCC(){
        $('.cc-modal').fadeIn();
        $('body').css('overflow', 'hidden');
    }

    $(document).on('click', '.cc-container', function(e){
    })
    $(document).on('click', '.cc-close', function(){
        closeCC();
    })

    $(document).on('click', '.cc-modal', function(e){
    })
    $(document).on('click', '.cc-button', function(){
        openCC();
    })
    var ccButton = document.getElementsByClassName('cc-button')[0];
    if(ccButton){
        ccButton.onmousedown = function(event) {
            // console.log(event);
            let shiftX = event.clientX - ccButton.getBoundingClientRect().left;
            let shiftY = event.clientY - ccButton.getBoundingClientRect().top;
            // ccButton.style.position = 'absolute';
            ccButton.style.zIndex = 1000;
            document.body.style.userSelect = "none";
            document.body.append(ccButton);
            moveAt(event.clientX, event.clientY);
            function moveAt(pageX, pageY) {
                if(pageX < window.innerWidth - 150 && pageX > 100 ){
                    ccButton.style.left = pageX - shiftX + 'px';
                }
                if(pageY < window.innerHeight - 40 && pageY > 40 ){
                    ccButton.style.top = pageY - shiftY + 'px';
                }
            }
            function onMouseMove(event) {
                if(event.clientX > window.innerWidth ||
                    event.clientX < 10 || 
                    event.clientY > window.innerHeight ||
                    event.clientY < 10){
                    document.removeEventListener('mousemove', onMouseMove);
                    ccButton.onmouseup = null;
            document.body.style.userSelect = "unset";
                }
            moveAt(event.clientX, event.clientY);
            }
            document.addEventListener('mousemove', onMouseMove);
            // (4) drop the ccButton, remove unneeded handlers
            ccButton.onmouseup = function(upevent) {
            document.removeEventListener('mousemove', onMouseMove);
            ccButton.onmouseup = null;
            document.body.style.userSelect = "unset";
            if(event.clientY == upevent.clientY && event.clientX == upevent.clientX){
                    openCC();
            }
            };
            ccButton.ondragstart = function() {
                return false;
            };
        };
    }
})
$(function(){
    $('.activities-nocar .activities-img').css('width', $('.owl-item.active').innerWidth());
})

