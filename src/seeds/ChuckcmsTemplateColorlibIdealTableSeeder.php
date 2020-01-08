<?php

namespace Chuckbe\ChuckcmsTemplateColorlibIdeal\seeds;

use Chuckbe\Chuckcms\Models\Content;
use Chuckbe\Chuckcms\Models\Template;
use Chuckbe\Chuckcms\Models\Menus;
use Chuckbe\Chuckcms\Models\MenuItems;
use Chuckbe\Chuckcms\Models\Repeater;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateColorlibIdealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateStarter\\seeds\\ChuckcmsTemplateStarterTableSeeder
        $fonts = [];
        $fonts['raw'] = 'DM+Sans:300,400,700&display=swap';
        
        $css = [];
        $css['icomoon']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/fonts/icomoon/style.css';
        $css['icomoon']['asset'] = 'true';

        $css['bootstrap']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/css/bootstrap.min.css';
        $css['bootstrap']['asset'] = 'true';

        $css['animate']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/css/animate.min.css';
        $css['animate']['asset'] = 'true';

        $css['fancybox']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/css/jquery.fancybox.min.css';
        $css['fancybox']['asset'] = 'true';

        $css['owlcarousel']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/css/owl.carousel.min.css';
        $css['owlcarousel']['asset'] = 'true';

        $css['owltheme']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/css/owl.theme.default.min.css';
        $css['owltheme']['asset'] = 'true';

        $css['flaticon']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/fonts/flaticon/font/flaticon.css';
        $css['flaticon']['asset'] = 'true';

        $css['aos']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/css/aos.css';
        $css['aos']['asset'] = 'true';

        $css['mainstyle']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/css/style.css';
        $css['mainstyle']['asset'] = 'true';


        $js = []; 
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/jquery-3.3.1.min.js';
        $js['jquery']['asset'] = 'true';

        $js['popper']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/popper.min.js';
        $js['popper']['asset'] = 'true';

        $js['bootstrap']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/bootstrap.min.js';
        $js['bootstrap']['asset'] = 'true';

        $js['owlcarousel']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/owl.carousel.min.js';
        $js['owlcarousel']['asset'] = 'true';

        $js['sticky']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/jquery.sticky.js';
        $js['sticky']['asset'] = 'true';

        $js['waypoints']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/jquery.waypoints.min.js';
        $js['waypoints']['asset'] = 'true';

        $js['animatenumber']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/jquery.animateNumber.min.js';
        $js['animatenumber']['asset'] = 'true';

        $js['fancybox']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/jquery.fancybox.min.js';
        $js['fancybox']['asset'] = 'true';

        $js['easing']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/jquery.easing.1.3.js';
        $js['easing']['asset'] = 'true';

        $js['aos']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/aos.js';
        $js['aos']['asset'] = 'true';

        $js['main']['href'] = 'chuckbe/chuckcms-template-colorlib-ideal/js/main.js';
        $js['main']['asset'] = 'true';

        $json = [];

        // create template
        Template::updateOrCreate(
            ['slug' => 'chuckcms-template-colorlib-ideal'],
            ['name' => 'ChuckCMS Template Colorlib Ideal',
            'hintpath' => 'chuckcms-template-colorlib-ideal',
            'path' => 'chuckbe/chuckcms-template-colorlib-ideal',
            'type' => 'default',
            'version' => '1.0',
            'author' => 'Colorlib',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1]
        );

        $menuleft = Menus::updateOrCreate(['name' => 'ideal-header-left'],['name' => 'ideal-header-left']);
        $menuright = Menus::updateOrCreate(['name' => 'ideal-header-right'],['name' => 'ideal-header-right']);
        $menufooter = Menus::updateOrCreate(['name' => 'ideal-footer'],['name' => 'ideal-footer']);

        MenuItems::updateOrCreate(
            ['label' => 'Home'],
            ['label' => 'Home',
            'link' => '#',
            'menu' => $menuleft->id,
            'sort' => MenuItems::getNextSortRoot($menuleft->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Project'],
            ['label' => 'Project',
            'link' => '#',
            'menu' => $menuleft->id,
            'sort' => MenuItems::getNextSortRoot($menuleft->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Services'],
            ['label' => 'Services',
            'link' => '#',
            'menu' => $menuleft->id,
            'sort' => MenuItems::getNextSortRoot($menuleft->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'About'],
            ['label' => 'About',
            'link' => '#',
            'menu' => $menuright->id,
            'sort' => MenuItems::getNextSortRoot($menuright->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Blog'],
            ['label' => 'Blog',
            'link' => '#',
            'menu' => $menuright->id,
            'sort' => MenuItems::getNextSortRoot($menuright->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Contact'],
            ['label' => 'Contact',
            'link' => '#',
            'menu' => $menuright->id,
            'sort' => MenuItems::getNextSortRoot($menuright->id)]
        );

        //FOOTER MENU START
        MenuItems::updateOrCreate(
            ['label' => 'About Us'],
            ['label' => 'About Us',
            'link' => '#',
            'menu' => $menufooter->id,
            'sort' => MenuItems::getNextSortRoot($menufooter->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Testimonials'],
            ['label' => 'Testimonials',
            'link' => '#',
            'menu' => $menufooter->id,
            'sort' => MenuItems::getNextSortRoot($menufooter->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Terms of Service'],
            ['label' => 'Terms of Service',
            'link' => '#',
            'menu' => $menufooter->id,
            'sort' => MenuItems::getNextSortRoot($menufooter->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Privacy'],
            ['label' => 'Privacy',
            'link' => '#',
            'menu' => $menufooter->id,
            'sort' => MenuItems::getNextSortRoot($menufooter->id)]
        );

        MenuItems::updateOrCreate(
            ['label' => 'Contact Us'],
            ['label' => 'Contact Us',
            'link' => '#',
            'menu' => $menufooter->id,
            'sort' => MenuItems::getNextSortRoot($menufooter->id)]
        );
        //FOOTER MENU END

        // SLIDER REPEATER BEGINS

        $content = [];
        $content_slug = 'ideal-homepage-slider';
            
        $content['fields'][$content_slug.'_'.'image']['label'] = 'Slider Image';
        $content['fields'][$content_slug.'_'.'image']['type'] = 'image_link';
        $content['fields'][$content_slug.'_'.'image']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'image']['placeholder'] = 'Select Image (1360px x 872px)';
        $content['fields'][$content_slug.'_'.'image']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'image']['value'] = null;
        $content['fields'][$content_slug.'_'.'image']['attributes']['id'] = 'ideal-homepage-slider-image-input';
        $content['fields'][$content_slug.'_'.'image']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'image']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'title']['label'] = 'Title';
        $content['fields'][$content_slug.'_'.'title']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'title']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'title']['placeholder'] = 'Title goes here';
        $content['fields'][$content_slug.'_'.'title']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'title']['value'] = null;
        $content['fields'][$content_slug.'_'.'title']['attributes']['id'] = 'ideal-homepage-slider-title-input';
        $content['fields'][$content_slug.'_'.'title']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'title']['table'] = 'true';

        $content['fields'][$content_slug.'_'.'subtitle']['label'] = 'Subtitle';
        $content['fields'][$content_slug.'_'.'subtitle']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'subtitle']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'subtitle']['placeholder'] = 'Subtitle goes here';
        $content['fields'][$content_slug.'_'.'subtitle']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'subtitle']['value'] = null;
        $content['fields'][$content_slug.'_'.'subtitle']['attributes']['id'] = 'ideal-homepage-slider-subtitle-input';
        $content['fields'][$content_slug.'_'.'subtitle']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'subtitle']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'buttontext']['label'] = 'Button Text';
        $content['fields'][$content_slug.'_'.'buttontext']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'buttontext']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'buttontext']['placeholder'] = 'Button Text goes here';
        $content['fields'][$content_slug.'_'.'buttontext']['validation'] = 'nullable';
        $content['fields'][$content_slug.'_'.'buttontext']['value'] = null;
        $content['fields'][$content_slug.'_'.'buttontext']['attributes']['id'] = 'ideal-homepage-slider-buttontext-input';
        $content['fields'][$content_slug.'_'.'buttontext']['required'] = 'false';
        $content['fields'][$content_slug.'_'.'buttontext']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'buttonlink']['label'] = 'Button Link';
        $content['fields'][$content_slug.'_'.'buttonlink']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'buttonlink']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'buttonlink']['placeholder'] = 'Button Link goes here';
        $content['fields'][$content_slug.'_'.'buttonlink']['validation'] = 'nullable';
        $content['fields'][$content_slug.'_'.'buttonlink']['value'] = null;
        $content['fields'][$content_slug.'_'.'buttonlink']['attributes']['id'] = 'ideal-homepage-slider-buttonlink-input';
        $content['fields'][$content_slug.'_'.'buttonlink']['required'] = 'false';
        $content['fields'][$content_slug.'_'.'buttonlink']['table'] = 'false';
        
        $content['actions']['store'] = 'true';    
        $content['actions']['detail'] = 'false';
    
        $content['files'] = 'false';

        Content::updateOrCreate(
            ['slug' => 'ideal-homepage-slider'],
            ['slug' => 'ideal-homepage-slider',
            'type' => 'repeater',
            'content' => $content]
        );

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/hero_1.jpg';
        $json['title'] = 'Welcome to <span class="text-primary">Ideal.</span>';
        $json['subtitle'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';
        $json['buttontext'] = 'Get A Quote';
        $json['buttonlink'] = '#';

        Repeater::create(
            ['slug' => 'ideal-homepage-slider',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/hero_2.jpg';
        $json['title'] = 'Enhance Human Experience';
        $json['subtitle'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';
        $json['buttontext'] = 'Get A Quote';
        $json['buttonlink'] = '#';

        Repeater::create(
            ['slug' => 'ideal-homepage-slider',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/hero_3.jpg';
        $json['title'] = 'The Best Interior Design';
        $json['subtitle'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';
        $json['buttontext'] = 'Get A Quote';
        $json['buttonlink'] = '#';

        Repeater::create(
            ['slug' => 'ideal-homepage-slider',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        // SLIDER REPEATER ENDS
        
        // REVIEWS REPEATER BEGINS
        
        $content = [];
        $content_slug = 'ideal-reviews';

        $content['fields'][$content_slug.'_'.'author']['label'] = 'Author';
        $content['fields'][$content_slug.'_'.'author']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'author']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'author']['placeholder'] = 'Author goes here';
        $content['fields'][$content_slug.'_'.'author']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'author']['value'] = null;
        $content['fields'][$content_slug.'_'.'author']['attributes']['id'] = 'ideal-reviews-author-input';
        $content['fields'][$content_slug.'_'.'author']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'author']['table'] = 'true';

        $content['fields'][$content_slug.'_'.'company']['label'] = 'Company';
        $content['fields'][$content_slug.'_'.'company']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'company']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'company']['placeholder'] = 'Company goes here';
        $content['fields'][$content_slug.'_'.'company']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'company']['value'] = null;
        $content['fields'][$content_slug.'_'.'company']['attributes']['id'] = 'ideal-reviews-company-input';
        $content['fields'][$content_slug.'_'.'company']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'company']['table'] = 'true';

        $content['fields'][$content_slug.'_'.'review']['label'] = 'Review';
        $content['fields'][$content_slug.'_'.'review']['type'] = 'textarea';
        $content['fields'][$content_slug.'_'.'review']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'review']['placeholder'] = 'Review goes here';
        $content['fields'][$content_slug.'_'.'review']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'review']['value'] = null;
        $content['fields'][$content_slug.'_'.'review']['attributes']['style'] = 'height:100px;';
        $content['fields'][$content_slug.'_'.'review']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'review']['table'] = 'false';
        
        $content['actions']['store'] = 'true';    
        $content['actions']['detail'] = 'false';
    
        $content['files'] = 'false';

        Content::updateOrCreate(
            ['slug' => 'ideal-reviews'],
            ['slug' => 'ideal-reviews',
            'type' => 'repeater',
            'content' => $content]
        );

        $json = [];
        $json['author'] = 'Mike Dorney';
        $json['company'] = 'CEO and Co-Founder';
        $json['review'] = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus totam sit delectus earum facere ex ea sunt, eos?';

        Repeater::create(
            ['slug' => 'ideal-reviews',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['author'] = 'James Smith';
        $json['company'] = 'CEO and Co-Founder';
        $json['review'] = 'Eligendi earum ad perferendis dolores, dolor quas. Ullam in, eaque mollitia suscipit id aspernatur rerum! Sit quibusdam ullam tempora quis, in voluptatum maiores veritatis recusandae!';

        Repeater::create(
            ['slug' => 'ideal-reviews',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['author'] = 'Mike Dorney';
        $json['company'] = 'CEO and Co-Founder';
        $json['review'] = 'Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?';

        Repeater::create(
            ['slug' => 'ideal-reviews',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        // REVIEWS REPEATER ENDS
        
        // BLOGS REPEATER BEGINS
        
        $content = [];
        $content_slug = 'ideal-blogs';

        $content['fields'][$content_slug.'_'.'title']['label'] = 'Title';
        $content['fields'][$content_slug.'_'.'title']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'title']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'title']['placeholder'] = 'Title goes here';
        $content['fields'][$content_slug.'_'.'title']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'title']['value'] = null;
        $content['fields'][$content_slug.'_'.'title']['attributes']['id'] = 'ideal-blogs-title-input';
        $content['fields'][$content_slug.'_'.'title']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'title']['table'] = 'true';

        $content['fields'][$content_slug.'_'.'slug']['label'] = 'Slug';
        $content['fields'][$content_slug.'_'.'slug']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'slug']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'slug']['placeholder'] = 'Slug goes here';
        $content['fields'][$content_slug.'_'.'slug']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'slug']['value'] = null;
        $content['fields'][$content_slug.'_'.'slug']['attributes']['id'] = 'ideal-blogs-slug-input';
        $content['fields'][$content_slug.'_'.'slug']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'slug']['table'] = 'true';

        $content['fields'][$content_slug.'_'.'date']['label'] = 'Date';
        $content['fields'][$content_slug.'_'.'date']['type'] = 'date';
        $content['fields'][$content_slug.'_'.'date']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'date']['placeholder'] = 'Date goes here';
        $content['fields'][$content_slug.'_'.'date']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'date']['value'] = null;
        $content['fields'][$content_slug.'_'.'date']['attributes']['id'] = 'ideal-blogs-date-input';
        $content['fields'][$content_slug.'_'.'date']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'date']['table'] = 'true';

        $content['fields'][$content_slug.'_'.'image']['label'] = 'Featured Image';
        $content['fields'][$content_slug.'_'.'image']['type'] = 'image_link';
        $content['fields'][$content_slug.'_'.'image']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'image']['placeholder'] = 'Select Image (1360px x 872px)';
        $content['fields'][$content_slug.'_'.'image']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'image']['value'] = null;
        $content['fields'][$content_slug.'_'.'image']['attributes']['id'] = 'ideal-blogs-featured-image-input';
        $content['fields'][$content_slug.'_'.'image']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'image']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'thumbnail']['label'] = 'Thumbnail Image';
        $content['fields'][$content_slug.'_'.'thumbnail']['type'] = 'image_link';
        $content['fields'][$content_slug.'_'.'thumbnail']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'thumbnail']['placeholder'] = 'Select Image (1360px x 872px)';
        $content['fields'][$content_slug.'_'.'thumbnail']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'thumbnail']['value'] = null;
        $content['fields'][$content_slug.'_'.'thumbnail']['attributes']['id'] = 'ideal-blogs-thumbnail-image-input';
        $content['fields'][$content_slug.'_'.'thumbnail']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'thumbnail']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'authorabout']['label'] = 'About the Author';
        $content['fields'][$content_slug.'_'.'authorabout']['type'] = 'textarea';
        $content['fields'][$content_slug.'_'.'authorabout']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'authorabout']['placeholder'] = 'About the Author goes here';
        $content['fields'][$content_slug.'_'.'authorabout']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'authorabout']['value'] = null;
        $content['fields'][$content_slug.'_'.'authorabout']['attributes']['style'] = 'height:100px;';
        $content['fields'][$content_slug.'_'.'authorabout']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'authorabout']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'authorname']['label'] = 'Author Name';
        $content['fields'][$content_slug.'_'.'authorname']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'authorname']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'authorname']['placeholder'] = 'Author Name goes here';
        $content['fields'][$content_slug.'_'.'authorname']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'authorname']['value'] = null;
        $content['fields'][$content_slug.'_'.'authorname']['attributes']['id'] = 'ideal-blogs-author-name-input';
        $content['fields'][$content_slug.'_'.'authorname']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'authorname']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'authorbtntext']['label'] = 'About the Author Button Text';
        $content['fields'][$content_slug.'_'.'authorbtntext']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'authorbtntext']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'authorbtntext']['placeholder'] = 'About the Author Button Text goes here';
        $content['fields'][$content_slug.'_'.'authorbtntext']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'authorbtntext']['value'] = 'Read More';
        $content['fields'][$content_slug.'_'.'authorbtntext']['attributes']['id'] = 'ideal-blogs-author-btn-text-input';
        $content['fields'][$content_slug.'_'.'authorbtntext']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'authorbtntext']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'authorbtnlink']['label'] = 'About the Author Button Link';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['placeholder'] = 'About the Author Button Link goes here';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['value'] = '#';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['attributes']['id'] = 'ideal-blogs-author-btn-link-input';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'authorbtnlink']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'authorimage']['label'] = 'Author Image';
        $content['fields'][$content_slug.'_'.'authorimage']['type'] = 'image_link';
        $content['fields'][$content_slug.'_'.'authorimage']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'authorimage']['placeholder'] = 'Select Image (1:1)';
        $content['fields'][$content_slug.'_'.'authorimage']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'authorimage']['value'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_1.jpg';
        $content['fields'][$content_slug.'_'.'authorimage']['attributes']['id'] = 'ideal-blogs-author-image-input';
        $content['fields'][$content_slug.'_'.'authorimage']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'authorimage']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'blog']['label'] = 'Blog';
        $content['fields'][$content_slug.'_'.'blog']['type'] = 'wysiwyg';
        $content['fields'][$content_slug.'_'.'blog']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'blog']['placeholder'] = 'Blog goes here';
        $content['fields'][$content_slug.'_'.'blog']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'blog']['value'] = null;
        $content['fields'][$content_slug.'_'.'blog']['attributes']['id'] = 'ideal-blogs-blog-input';
        $content['fields'][$content_slug.'_'.'blog']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'blog']['table'] = 'false';
        
        $content['actions']['store'] = 'true';    
        $content['actions']['detail'] = [];
        $content['actions']['detail']['url'] = 'blog/[ideal-blogs_slug]';
        $content['actions']['detail']['page'] = 'chuckcms-template-colorlib-ideal::templates.chuckcms-template-colorlib-ideal.blog-single';
    
        $content['files'] = 'false';

        Content::updateOrCreate(
            ['slug' => 'ideal-blogs'],
            ['slug' => 'ideal-blogs',
            'type' => 'repeater',
            'content' => $content]
        );

        $json = [];
        $json['title'] = 'Single Blog Post Title 1';
        $json['slug'] = 'single-blog-post-title-1';
        $json['date'] = date('d/m/Y', strtotime('-5d'));
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/hero_2.jpg';
        $json['thumbnail'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/post_1.jpg';
        $json['authorabout'] = 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.';
        $json['authorname'] = 'James Miller';
        $json['authorbtntext'] = 'Read More';
        $json['authorbtnlink'] = '#';
        $json['authorimage'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_1.jpg';
        $json['blog'] = '<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>';

        Repeater::create(
            ['slug' => 'ideal-blogs',
            'url' => 'blog/single-blog-post-title-1',
            'page' => 'chuckcms-template-colorlib-ideal::templates.chuckcms-template-colorlib-ideal.blog-single',
            'json' => $json
        ]);

        $json = [];
        $json['title'] = 'Single Blog Post Title 2';
        $json['slug'] = 'single-blog-post-title-2';
        $json['date'] = date('d/m/Y', strtotime('-4d'));
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/hero_2.jpg';
        $json['thumbnail'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/post_2.jpg';
        $json['authorabout'] = 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.';
        $json['authorname'] = 'James Miller';
        $json['authorbtntext'] = 'Read More';
        $json['authorbtnlink'] = '#';
        $json['authorimage'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_1.jpg';
        $json['blog'] = '<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>';

        Repeater::create(
            ['slug' => 'ideal-blogs',
            'url' => 'blog/single-blog-post-title-3',
            'page' => 'chuckcms-template-colorlib-ideal::templates.chuckcms-template-colorlib-ideal.blog-single',
            'json' => $json
        ]);

        $json = [];
        $json['title'] = 'Single Blog Post Title 3';
        $json['slug'] = 'single-blog-post-title-3';
        $json['date'] = date('d/m/Y', strtotime('-3d'));
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/hero_2.jpg';
        $json['thumbnail'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/post_3.jpg';
        $json['authorabout'] = 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.';
        $json['authorname'] = 'James Miller';
        $json['authorbtntext'] = 'Read More';
        $json['authorbtnlink'] = '#';
        $json['authorimage'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_1.jpg';
        $json['blog'] = '<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>';

        Repeater::create(
            ['slug' => 'ideal-blogs',
            'url' => 'blog/single-blog-post-title-3',
            'page' => 'chuckcms-template-colorlib-ideal::templates.chuckcms-template-colorlib-ideal.blog-single',
            'json' => $json
        ]);

        $json = [];
        $json['title'] = 'Single Blog Post Title 4';
        $json['slug'] = 'single-blog-post-title-4';
        $json['date'] = date('d/m/Y', strtotime('-2d'));
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/hero_2.jpg';
        $json['thumbnail'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/post_4.jpg';
        $json['authorabout'] = 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.';
        $json['authorname'] = 'James Miller';
        $json['authorbtntext'] = 'Read More';
        $json['authorbtnlink'] = '#';
        $json['authorimage'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_1.jpg';
        $json['blog'] = '<p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
<blockquote><p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p></blockquote>
<p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>';

        Repeater::create(
            ['slug' => 'ideal-blogs',
            'url' => 'blog/single-blog-post-title-4',
            'page' => 'chuckcms-template-colorlib-ideal::templates.chuckcms-template-colorlib-ideal.blog-single',
            'json' => $json
        ]);

        // BLOGS REPEATER ENDS
        
        // TEAM REPEATER BEGINS
        
        $content = [];
        $content_slug = 'ideal-team';

        $content['fields'][$content_slug.'_'.'image']['label'] = 'Featured Image';
        $content['fields'][$content_slug.'_'.'image']['type'] = 'image_link';
        $content['fields'][$content_slug.'_'.'image']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'image']['placeholder'] = 'Select Image (1:1)';
        $content['fields'][$content_slug.'_'.'image']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'image']['value'] = null;
        $content['fields'][$content_slug.'_'.'image']['attributes']['id'] = 'ideal-team-featured-image-input';
        $content['fields'][$content_slug.'_'.'image']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'image']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'function']['label'] = 'Function';
        $content['fields'][$content_slug.'_'.'function']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'function']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'function']['placeholder'] = 'Function goes here';
        $content['fields'][$content_slug.'_'.'function']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'function']['value'] = null;
        $content['fields'][$content_slug.'_'.'function']['attributes']['id'] = 'ideal-team-function-input';
        $content['fields'][$content_slug.'_'.'function']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'function']['table'] = 'true';

        $content['fields'][$content_slug.'_'.'name']['label'] = 'Name';
        $content['fields'][$content_slug.'_'.'name']['type'] = 'text';
        $content['fields'][$content_slug.'_'.'name']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'name']['placeholder'] = 'Name goes here';
        $content['fields'][$content_slug.'_'.'name']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'name']['value'] = null;
        $content['fields'][$content_slug.'_'.'name']['attributes']['id'] = 'ideal-team-name-input';
        $content['fields'][$content_slug.'_'.'name']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'name']['table'] = 'false';

        $content['fields'][$content_slug.'_'.'description']['label'] = 'Description';
        $content['fields'][$content_slug.'_'.'description']['type'] = 'textarea';
        $content['fields'][$content_slug.'_'.'description']['class'] = 'form-control';
        $content['fields'][$content_slug.'_'.'description']['placeholder'] = 'Description goes here';
        $content['fields'][$content_slug.'_'.'description']['validation'] = 'required';
        $content['fields'][$content_slug.'_'.'description']['value'] = null;
        $content['fields'][$content_slug.'_'.'description']['attributes']['style'] = 'height:100px;';
        $content['fields'][$content_slug.'_'.'description']['required'] = 'true';
        $content['fields'][$content_slug.'_'.'description']['table'] = 'false';

        
        $content['actions']['store'] = 'true';    
        $content['actions']['detail'] = 'false';

        $content['files'] = 'false';

        Content::updateOrCreate(
            ['slug' => 'ideal-team'],
            ['slug' => 'ideal-team',
            'type' => 'repeater',
            'content' => $content]
        );

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_1.jpg';
        $json['function'] = 'Founder';
        $json['name'] = 'James Doe';
        $json['description'] = 'Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?';

        Repeater::create(
            ['slug' => 'ideal-team',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_2.jpg';
        $json['function'] = 'Founder';
        $json['name'] = 'James Doe';
        $json['description'] = 'Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?';

        Repeater::create(
            ['slug' => 'ideal-team',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_3.jpg';
        $json['function'] = 'Founder';
        $json['name'] = 'James Doe';
        $json['description'] = 'Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?';

        Repeater::create(
            ['slug' => 'ideal-team',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_4.jpg';
        $json['function'] = 'Founder';
        $json['name'] = 'James Doe';
        $json['description'] = 'Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?';

        Repeater::create(
            ['slug' => 'ideal-team',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_5.jpg';
        $json['function'] = 'Founder';
        $json['name'] = 'James Doe';
        $json['description'] = 'Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?';

        Repeater::create(
            ['slug' => 'ideal-team',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

        $json = [];
        $json['image'] = '/chuckbe/chuckcms-template-colorlib-ideal/images/person_1.jpg';
        $json['function'] = 'Founder';
        $json['name'] = 'James Doe';
        $json['description'] = 'Officia, eius omnis rem non quis eos excepturi cumque sequi pariatur eaque quasi nihil dicta tempore voluptate culpa, veritatis incidunt voluptatibus qui?';

        Repeater::create(
            ['slug' => 'ideal-team',
            'url' => null,
            'page' => 'default',
            'json' => $json
        ]);

    }
}
