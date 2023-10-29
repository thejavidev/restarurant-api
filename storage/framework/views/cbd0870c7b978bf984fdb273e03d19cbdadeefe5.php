<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('javid/css/main.css')); ?>">
    <title>Cavidan İsmayılov | Veb saytların hazırlanması,sayt yığılması,sayt sifarişi</title>

    <style>
        div#urban_overlay{
            display: none;
        }
    </style>
</head>

<body>
<div class="toggle-theme">
    <i class="fas fa-moon"></i>
</div>

<div class="switch-lang">
    <div class="language">
        <div class="current-lang">
            <div class="lang-text">

                <a class="lang-switcher__link">
                    Az
                </a>
            </div>
        </div>
        <div class="lang-dropdown ">
            <div class="selecting-lang">
                <p class="lang-text"><a class="lang-switcher__link " href="#">Ru</a></p>
            </div>
            <div class="selecting-lang">
                <p class="lang-text"><a class="lang-switcher__link " href="#">En</a></p>
            </div>
            <div class="selecting-lang">
                <p class="lang-text"><a class="lang-switcher__link " href="#">tr</a></p>
            </div>
        </div>
    </div>
</div>
<header>
    <ul>
        <li>

            <a href="#about">
                <i class="fa-solid fa-house-user"></i>

            </a>
        </li>
        <li>
            <a href="#knowledge">
                <i class="fa-solid fa-gears"></i>
            </a>
        </li>
        <li>
            <a href="#achievements">
                <i class="fa-solid fa-certificate"></i>
            </a>
        </li>
        <li>
            <a href="#works">
                <i class="fa-solid fa-briefcase"></i>
            </a>
        </li>
        <li>
            <a href="#portfolio">
                <i class="fa-solid fa-link"></i>
            </a>
        </li>
    </ul>
</header>

<div class="global container">
    <section class="about-all" id="about" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
             data-aos-duration="500">
        <h1>haqqımda</h1>
        <p class="desc"><?php echo \App\Helpers\Options::getOption('haqqimizda_'.app()->getLocale()); ?></p>
        <div class="about">

            <div class="col-lg-6 about_l">

                <div class="left col-6">

                    <ul>
                        <li>
                            <a href="#">tam ad</a>
                        </li>
                        <li>
                            <a href="#">doğum günü</a>
                        </li>
                        <li>
                            <a href="#">e-poçt</a>
                        </li>
                        <li>
                            <a href="#">telefon</a>
                        </li>
                        <li>
                            <a href="#">sosial</a>
                        </li>
                    </ul>
                </div>
                <div class="right col-6">
                    <ul>
                        <li>
                            <a href="#"><?php echo \App\Helpers\Options::getOption('full_name'); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo \App\Helpers\Options::getOption('birthday'); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo \App\Helpers\Options::getOption('email'); ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo \App\Helpers\Options::getOption('tel'); ?></a>
                        </li>
                        <li>
                            <ul class="socials">
                                <li>
                                    <a href="<?php echo \App\Helpers\Options::getOption('facebook'); ?>" target="_blank"><i
                                            class="fa-brands fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo \App\Helpers\Options::getOption('instagram'); ?>" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo \App\Helpers\Options::getOption('linkedin'); ?>"
                                       target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo \App\Helpers\Options::getOption('github'); ?>" target="_blank"><i
                                            class="fa-brands fa-github"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo \App\Helpers\Options::getOption('youtube'); ?>" target="_blank"><i
                                            class="fa-brands fa-youtube"></i></a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 about_r">
                <div class="profile-img">
                    <img src="<?php echo e(asset('javid')); ?>/images/cavidan-ismayilov.png" alt="">
                </div>
            </div>
            <div class="col-lg-12 about_bottom">
                <div class="title col-lg-12 col-12">
                    <h1>elə indi sayt sifariş et</h1>
                </div>
                <div class="col-lg-4 col-md-6 col-12 about_bottom_box">
                    <div class="content">
                        <label for="name">Sayt tipi</label>
                        <select id="serviceID" name="serviceID">
                            <option value="">--Seçim edin--</option>
                            <option value="Məlumat" tipli="">Məlumat tipli</option>
                            <option value="Xəbər" saytı="">Xəbər saytı</option>
                            <option value="Elan" saytı="">Elan saytı</option>
                            <option value="Onlayn" mağaza="">Onlayn mağaza</option>
                            <option value="Tibbi" sayt="">Tibbi sayt</option>
                            <option value="Təhsil" saytı="">Təhsil saytı</option>
                            <option value="Turizim" saytı="">Turizim saytı</option>
                            <option value="Digər">Digər</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 about_bottom_box">
                    <div class="content">
                        <label for="name">Adınız</label>
                        <input required="" type="text" placeholder="Anar" name="name">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 about_bottom_box">
                    <div class="content">
                        <label for="phone">Əlaqə nömrəniz</label>
                        <input required="" type="text" placeholder="0501111111" name="phone">
                    </div>
                </div>
                <div class="btn-div">
                    <button type="submit" class="btn">göndər</button>
                </div>
            </div>
        </div>
    </section>
    <section class="knowledge" id="knowledge" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
             data-aos-duration="800">
        <div class="bar"></div>
        <div class="inner">
            <div class="title">
                <h1>biliklərim</h1>
            </div>
            <div class="icons">
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/html.png" alt="">
                    <span>html</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/css.png" alt="">
                    <span>css</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/sass.png" alt="">
                    <span>scss</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/jquery.png" alt="">
                    <span>jquery</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/bootstrap.png" alt="">
                    <span>bootstrap</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/tailwind.png" alt="">
                    <span>tailwindcss</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/react.png" alt="">
                    <span>reactjs</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/next.png" alt="">
                    <span>nextjs</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/photoshop.png" alt="">
                    <span>photoshop</span>
                </div>
                <div class="icon">
                    <img src="<?php echo e(asset('javid')); ?>/images/icons/figma.png" alt="">
                    <span>figma</span>
                </div>
            </div>
        </div>

    </section>
    <section class="achievements" id="achievements" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
             data-aos-duration="1000">

        <div class="title">
            <h1>nailiyyətlərim,sertifikatlarım və cv</h1>
        </div>
        <div class="awards">
            <div class="award-box col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="content">
                    <img src="<?php echo e(asset('javid')); ?>/images/awards/asiniad.png" alt="">
                    <img class="award" src="<?php echo e(asset('javid')); ?>/images/awards/award2.png" alt="">
                    <span>Habitat Dərnəyi, Microsoft və Antalya Techo kəndinin əməkdaşlığı ilə IOT əsaslı
                            S-Montion layihəsi ilə təşkil edilən ANSİAD-ın 17-ci Sahibkarlıq Günləri çərçivəsində
                            Antalya İoT Hackathon tədbirində Tulpar qrupu olaraq 2-ci yer üçün mükafat.</span>
                </div>
            </div>
            <div class="award-box col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="content">
                    <img src="<?php echo e(asset('javid')); ?>/images/awards/udmey.png" alt="">
                    <div class="udemy-title">
                        <a
                            href="https://github.com/thejavidev/thejavidev.github.io/raw/main/CV/Cavidan%20Ismayilov-Sertifikat.pdf">Udemy
                            - Sertifikat <i class="fa-solid fa-download"></i></a>
                        <span>Web Design | Html 5 | Css 3 | Bootstrap 4 | Javascript</span>
                    </div>
                </div>
            </div>
            <div class="award-box col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="content">
                    <img src="<?php echo e(asset('javid')); ?>/images/awards/udmey.png" alt="">
                    <div class="udemy-title">
                        <a href="#">Udemy - Sertifikat <i class="fa-solid fa-download"></i></a>
                        <span>React (Storybook,Webpack,Tailwind,Jest)</span>
                    </div>
                </div>
            </div>
            <div class="award-box col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="content">
                    <img src="<?php echo e(asset('javid')); ?>/images/cv/cv.png" alt="">
                    <div class="udemy-title">
                        <a href="#">CV <i class="fa-solid fa-download"></i></a>
                        <span>Cavidan Ismayilov</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="works" id="works" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
             data-aos-duration="1200">
        <div class="bar"></div>
        <div class="title">
            <h1>iş təcrübəm</h1>
        </div>
        <div class="inner">
            <div class="all-works">
                <div class="left col-lg-3 col-3 left">
                    <ul>
                        <li>
                            <div class="green active">
                                Avq 2021-Ꝏ
                            </div>
                        </li>
                        <li>
                            <div class="green">
                                Okty 2017-Dek 2020
                            </div>
                        </li>
                        <li>
                            <div class="green">
                                iyun 2015-Sen 2017
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right col-lg-9 col-9 right">
                    <ul>
                        <li>
                            <div class="works-title">
                                <h5><span>Carrot MMC</span> (Front-end Developer)</h5>
                                <h5>Veb saytların yığılması ilə məşğulam.</h5>
                            </div>
                        </li>
                        <li>
                            <div class="works-title">
                                <h5><span>Velosport Baku</span> (Developer)</h5>
                                <h5>Wordpressdə saytların idarə edilməsi ilə məşğul olmuşam</h5>
                            </div>
                        </li>
                        <li>
                            <div class="works-title">
                                <h5><span>Yaygan</span> (Developer)</h5>
                                <h5>Wordpressdə saytların idarə edilməsi ilə məşğul olmuşam</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <section class="services" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1400">
        <div class="title">
            <h1>xidmətlərim</h1>
        </div>
        <div class="all-services">
            <div class="col-xl-4 col-lg-6 col-md-6 service-one">
                <div class="content">
                    <div class="top-title">
                        <img src="<?php echo e(asset('javid')); ?>/images/servives/web.png" alt="">
                        <span class="headline">Veb saytların hazırlanması</span>
                    </div>
                    <div class="bottom-title">
                            <span class="description">İstənilən ağırlıqlı və tam funksional veb saytların
                                hazırlanması.</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 service-one">
                <div class="content">
                    <div class="top-title">
                        <img src="<?php echo e(asset('javid')); ?>/images/servives/1262019.png" alt="">
                        <span class="headline">Veb Dizayn (Hər ekrana uyumlu dizaynlar)</span>
                    </div>
                    <div class="bottom-title">
                            <span class="description">Müştərinin istəyinə uyğun veb saytların responsiv dizayn
                                edilməsi.</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 service-one">
                <div class="content">
                    <div class="top-title">
                        <img src="<?php echo e(asset('javid')); ?>/images/servives/3768365.png" alt="">
                        <span class="headline">Onlayn Ödəmə </span>
                    </div>
                    <div class="bottom-title">
                        <span class="description">Saytlara onlayn ödəmə sistemlərinin integrasiyası.</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 service-one">
                <div class="content">
                    <div class="top-title">
                        <img src="<?php echo e(asset('javid')); ?>/images/servives/516686.png" alt="">
                        <span class="headline">Hosting Satışı</span>
                    </div>
                    <div class="bottom-title">
                            <span class="description">Müxtəlif həcmli hosting paketlərinin satışı və texniki
                                dəstəyi.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio" id="portfolio" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
             data-aos-duration="1600">
        <div class=" bar"></div>
        <div class="title">
            <h1>portfoliom</h1>
        </div>
        <div class="inner">
            <div class="portfolio-boxs">
                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 portfolio-inner">
                        <a href="<?php echo e($project->link); ?>" target="_blank">
                            <div class="content">
                                <img src="<?php echo e(asset('files/products/'.$project->src)); ?>" alt="">
                                <div class="name">
                                    <h3><?php echo e($project->{'title_'.app()->getLocale()}); ?></h3><i class="fa-solid fa-link"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="btn-div d-none">
                    <button type="submit" class="btn ">daha çox</button>
                    <button type="submit" class="btn d-none">yüklənir...</button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <h1>Cavidan Ismayilov</h1>
                <h6>Veb saytların hazırlanması, Sayt sifarişi,Hosting xidmətləri</h6>
            </div>
        </div>
    </footer>

</div>










<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo e(asset('javid/js/main.js')); ?>"></script>
</body>

</html>
<?php /**PATH D:\SAYTLAR\DESKTOP\coffee\resources\views/front/master.blade.php ENDPATH**/ ?>