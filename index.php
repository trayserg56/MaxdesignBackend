<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $APPLICATION;
$APPLICATION->SetTitle('Главная');
?>
    <section class="about" id="about" aria-labelledby="about-heading">
        <div class="about__inner">
            <div class="about__col about__col--text">
                <div class="about__intro"><h2 class="about__label" id="about-heading">
                        <?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/about-heading.php",
                            ]
                        );
                        ?></h2>
                    <p class="about__lead">
                        <?php
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/about-lead-value.php",
                                ]
                        );
                        ?>
                        </p></div>
                <div class="about__stats">
                    <div class="about__stat"><p class="about__stat-value">
                            <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/about-stat-value.php",
                                ]
                            );
                            ?></p>
                        <p class="about__stat-caption">
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/include/about-stat.php",
                                    ]
                            );
                            ?>
                            </p></div>
                    <div class="about__stat"><p class="about__stat-value">
                            <?php
                            $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/about-stat-value1.php",
                                ]
                            );
                            ?></p>
                        <p class="about__stat-caption">
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/include/about-stat-caption.php",
                                    ]
                            );
                            ?>
                           </p></div>
                </div>
            </div>
            incl awards
        </div>
    </section>
    <section class="service" id="service" aria-labelledby="service-heading">
        <div class="service__inner">
            <div class="service__title"><p class="service__label">Услуги</p>
                <h2 class="service__heading" id="service-heading">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/service-heading.php",
                        ]
                    );
                    ?>

                </h2></div>
            incl main-service
        </div>
    </section>
    <section class="home-why" id="why" aria-labelledby="why-heading">
        <div class="home-why__inner">
            <div class="home-why__title"><p class="home-why__label">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/why-title.php",
                            ]
                    );
                    ?>
                    </p>
                <h2 class="home-why__heading" id="why-heading">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/why-heading.php",
                            ]
                    );
                    ?>

                </h2></div>
            incl main-why
        </div>
    </section>
    <section class="team" id="team" aria-labelledby="team-heading">
        <div class="team__inner">
            <div class="team__title"><p class="team__label">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/team-lable.php",
                        ]
                    );
                    ?></p>
                <h2 class="team__heading" id="team-heading">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/team-heading.php",
                        ]
                    );
                    ?></h2>
                <p class="team__text">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/team-text.php",
                        ]
                    );
                    ?></p></div>
            incl main-team
        </div>
    </section>
    <section class="partners" id="partners" aria-labelledby="partners-heading">
        <div class="partners__inner">
            <div class="partners__title"><p class="partners__label">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/partners-lable.php",
                            ]
                    );
                    ?>
                   </p>
                <h2 class="partners__heading" id="partners-heading">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/partners-heading.php",
                            ]
                    );
                    ?>
                    </h2></div>
            incl main-partners
        </div>
    </section>
    incl main-reference
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>