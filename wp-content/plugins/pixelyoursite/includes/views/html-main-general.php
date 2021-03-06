<?php

namespace PixelYourSite;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

?>

<!-- Pixel IDs -->
<div class="card card-static">
    <div class="card-header">
        Pixel IDs
    </div>
    <div class="card-body">

        <?php if ( Facebook()->enabled() ) : ?>

            <div class="row align-items-center mb-3">
                <div class="col-2  py-2">
                    <img class="tag-logo" src="<?php echo PYS_FREE_URL; ?>/dist/images/facebook-small-square.png">
                </div>
                <div class="col-6">
                    Your Facebook Pixel
                </div>
                <div class="col-4">
                    <label for="fb_settings_switch" class="btn btn-block btn-sm btn-primary btn-settings">Click for settings</label>
                </div>
            </div>
            <input type="checkbox" id="fb_settings_switch" style="display: none">
            <div class="settings_content">
                <div class="row  mb-2">
                    <div class="col-12">
                        <?php Facebook()->render_switcher_input("use_server_api"); ?>
                        <h4 class="switcher-label">Enable Conversion API (add the token below)</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <?php Facebook()->render_switcher_input( 'advanced_matching_enabled' ); ?>
                        <h4 class="switcher-label">Enable Advanced Matching</h4>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <p>
                            Learn about Conversion API and Advanced Matching privacy and consent:
                            <a href="https://www.youtube.com/watch?v=PsKdCkKNeLU" target="_blank">watch video</a>
                        </p>
                        <p>
                            Install multiple Facebook Pixles with CAPI support:
                            <a href="https://www.youtube.com/watch?v=HM98mGZshvc" target="_blank">watch video</a>
                        </p>
                    </div>
                </div>

                <div class="plate pt-3 pb-3 mb-3">
                    <div class="row mb-3">
                        <div class="col-12">
                            <h4 class="label">Facebook Pixel ID:</h4>
                            <?php Facebook()->render_pixel_id( 'pixel_id', 'Facebook Pixel ID' ); ?>
                            <small class="form-text">
                                <a href="https://www.pixelyoursite.com/pixelyoursite-free-version/add-your-facebook-pixel?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-ids"
                                   target="_blank">How to get it?</a>
                            </small>
                            <p class="mt-3 mb-0">Add multiple Facebook Pixels with the <a href="https://www.pixelyoursite.com/?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-ids"
                                                                                          target="_blank">pro version</a>.</p>
                        </div>
                    </div>
                    <div class="row align-items-center mb-3">
                        <div class="col-12">
                            <h4 class="label">Conversion API (recommended):</h4>
                            <?php Facebook()->render_text_area_array_item("server_access_api_token","Api token") ?>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            Send events directly from your web server to Facebook through the Conversion API. This can help you capture more events. An access token is required to use the server-side API.
                            <a href='https://www.pixelyoursite.com/facebook-conversion-api-capi' target='_blank'>Learn how to generate the token and how to test Conversion API</a>
                        </div>
                    </div>

                    <div class="row mt-3 mb-3">
                        <div class="col-12">
                            <?php Facebook()->render_checkbox_input("server_event_use_ajax","Use Ajax when conversion API is enabled. Keep this option active if you use a cache");?>
                        </div>
                    </div>

                    <div class="row align-items-center mb-3">
                        <div class="col-12">
                            <h4 class="label">test_event_code :</h4>
                            <?php Facebook()->render_text_input_array_item("test_api_event_code","Code"); ?>
                            <small class="form-text">
                                Use this if you need to test the server-side event. <strong>Remove it after testing</strong>
                            </small>
                        </div>
                    </div>
                    <?php if(isWPMLActive()) : ?>
                        <div class="row mb-3">
                            <div class="col-12">
                                <strong>WPML Detected. </strong> With the <a target="_blank" href="https://www.pixelyoursite.com/plugins/pixelyoursite-professional?utm_medium=plugin&utm_campaign=multilingual">Advanced and Agency</a> licenses, you can fire a different pixel for each language.
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php addMetaTagFields(Facebook(),"https://www.pixelyoursite.com/verify-domain-facebook"); ?>
            </div>

            <hr>
        <?php endif; ?>


	    <?php if ( GA()->enabled() ) : ?>

            <div class="row align-items-center mb-3">
                <div class="col-2 py-2">
                    <img class="tag-logo" src="<?php echo PYS_FREE_URL; ?>/dist/images/analytics-square-small.png">
                </div>
                <div class="col-6">
                    Your Google Analytics
                </div>
                <div class="col-4">
                    <label for="gan_settings_switch" class="btn btn-block btn-sm btn-primary btn-settings">Click for settings</label>
                </div>
            </div>

        <input type="checkbox" id="gan_settings_switch" style="display: none">
        <div class="settings_content">
            <div class="plate pt-3 pb-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <h4 class="label mb-3 mt-3">Google Analytics tracking ID:</h4>
                        <?php GA()->render_pixel_id( 'tracking_id', 'Google Analytics tracking ID' ); ?>
                        <small class="form-text" mb-2>
                            <a href="https://www.pixelyoursite.com/pixelyoursite-free-version/add-your-google-analytics-code?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-ids"
                               target="_blank">How to get it?</a>
                        </small>
                        <div class ="mt-2">
                            <input type="checkbox" class="custom-control-input" name="pys[ga][is_enable_debug_mode][-1]" value="0" checked />
                            <?php GA()->render_checkbox_input_array("is_enable_debug_mode","Enable Analytics Debug mode for this property");?>
                        </div>

                        <p class="mt-3 ">Add multiple Google Analytics tags with the <a href="https://www.pixelyoursite.com/?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-ids"
                                                                                        target="_blank">pro version</a>.</p>
                        <p>
                            Install the old Google Analytics UA property and the new GA4 at the same time:
                            <a href="https://www.youtube.com/watch?v=JUuss5sewxg" target="_blank">watch video</a>
                        </p>
                    </div>
                </div>
                <?php if(isWPMLActive()) : ?>
                    <div class="row mb-3">
                        <div class="col-12">
                            <strong>WPML Detected. </strong> With the <a target="_blank" href="https://www.pixelyoursite.com/plugins/pixelyoursite-professional?utm_medium=plugin&utm_campaign=multilingual">Advanced and Agency</a> licenses, you can fire a different pixel for each language.
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>


            <hr>

	    <?php endif; ?>

        <?php do_action( 'pys_admin_pixel_ids' ); ?>

        <div class="row align-items-center">
            <div class="col-2 py-4">
                <img class="tag-logo" src="<?php echo PYS_FREE_URL; ?>/dist/images/google-ads-square-small.png">
            </div>
            <div class="col-10">
                Add the Google Ads tag with the <a
                        href="https://www.pixelyoursite.com/google-ads-tag?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-ids"
                        target="_blank">pro version</a>.
                <div class="mt-3">
                    Learn how to install the Google Ads Tag:
                    <a href="https://www.youtube.com/watch?v=plkv_v4nz8I" target="_blank">watch video</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-2 py-4">
                <img class="tag-logo" src="<?php echo PYS_FREE_URL; ?>/dist/images/tiktok-logo.png">
            </div>
            <div class="col-10">
                Add the TikTok tag with the <a
                        href="https://www.pixelyoursite.com/google-ads-tag?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-ids"
                        target="_blank">pro version</a>.
                <div class="small">TikTok Tag integration is in beta.</div>
                <div class="mt-3">
                    How to install the TickTok tag and how to get the ID: <a href="https://www.youtube.com/watch?v=vWRZc66eaPo" target="_blank">watch video</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="panel panel-primary">
    <div class="row">
        <div class="col">
            <p class="text-center">Learn how to use Facebook Pixel like a genuine expert. Download this Facebook
                Pixel Essential Guide:</p>
            <p class="text-center mb-0">
                <a href="https://www.pixelyoursite.com/facebook-pixel-pdf-guide?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-facebook-guide" class="btn btn-sm btn-save" target="_blank">Click to get the free guide</a>
            </p>
        </div>
    </div>
</div>

<!-- video -->
<div class="card card-static">
    <div class="card-header">
        Recommended Videos:
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <p><a href="https://www.youtube.com/watch?v=uXTpgFu2V-E" target="_blank">How to configure Facebook Conversion API (2:51 min) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=DZzFP4pSitU" target="_blank">Facebook Pixel, CAPI, and PixelYourSite MUST WATCH (8:19) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=QqAIO1ONc0I" target="_blank">How to test Facebook Conversion API (10:16 min) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=1W1yA9L-6F8" target="_blank">Facebook Pixel Events and Parameters (12:05 min) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=sM9yNkBK6Eg" target="_blank">Potentially Violating Personal Data Sent to Facebook (7:30 min) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=PsKdCkKNeLU" target="_blank">Facebook Conversion API and the Consent Problem (9:25 min) - watch now</a></p>

                <p><a href="https://www.youtube.com/watch?v=jJlhnF_QNxk" target="_blank">What you MUST know about Facebook Attribution Settings (8:49) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=hbecImCa9d0" target="_blank">Google Ads DATA-DRIVEN Attribution (8:14) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=kEp5BDg7dP0" target="_blank">How to fire EVENTS with PixelYourSite (22:28) - watch now</a></p>

                <p><a href="https://www.youtube.com/watch?v=HM98mGZshvc" target="_blank">Multiple Facebook Pixels with CAPI events for WordPress and WooCommerce (12:20) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=JUuss5sewxg" target="_blank">Multiple Google Analytics properties on WordPress and WooCommerce (6:17) - watch now</a></p>
                <p><a href="https://www.youtube.com/watch?v=vWRZc66eaPo" target="_blank">How to install the TikTok Tag on WordPress with PixelYourSite - WooCommerce Support (9:11) - watch now</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
            </div>
            <div class="col-4 justify-content-end">
                <a href="https://www.youtube.com/channel/UCnie2zvwAjTLz9B4rqvAlFQ" target="_blank">Watch more on our YouTube channel</a>
            </div>
        </div>
    </div>
</div>

<!-- Signal Events -->
<div class="card">
    <div class="card-header has_switch">
        <?php PYS()->render_switcher_input('signal_events_enabled');?>Track key actions with the Signal event <?php cardCollapseBtn(); ?>
    </div>
    <div class="card-body">
        <?php if ( Facebook()->enabled() ) : ?>
            <div class="row">
                <div class="col">
                    <?php Facebook()->render_switcher_input( 'signal_events_enabled' ); ?>
                    <h4 class="switcher-label">Enable on Facebook</h4>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( GA()->enabled() ) : ?>
            <div class="row">
                <div class="col">
                    <?php GA()->render_switcher_input( 'signal_events_enabled' ); ?>
                    <h4 class="switcher-label">Enable on Google Analytics</h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col col-offset-left">
                    <?php GA()->render_checkbox_input( 'signal_events_non_interactive',
                        'Non-interactive event' ); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( Bing()->enabled() ) : ?>
            <div class="row">
                <div class="col">
                    <?php Bing()->render_switcher_input( 'signal_events_enabled' ); ?>
                    <h4 class="switcher-label">Enable on Bing</h4>
                </div>
            </div>
        <?php endif; ?>

        <hr class="mb-2"/>

        <h4 class="label">Actions:</h4>
        <div class="row mt-4">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_click_enabled' ,"Internal Clicks/External Clicks",true); ?>
                <?php renderProBadge(); ?>
                <div  class="col-offset-left">
                    <small> Specific parameters: <i>text, target_url</i></small>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_watch_video_enabled','Watch Video (YouTube and Vimeo embedded videos)',true ); ?>
                <?php renderProBadge(); ?>
                <div  class="col-offset-left">
                    <small> Specific parameters: <i> video_type, video_title, video_id</i></small>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_tel_enabled',"Telephone links clicks",true ); ?>
                <?php renderProBadge(); ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_email_enabled' ,"Email links clicks",true); ?>
                <?php renderProBadge(); ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_form_enabled',"Forms" ); ?>
                <div  class="col-offset-left">
                    <small> Specific parameters: <i>text, from_class, form_id</i></small>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_user_signup_enabled',"User signups",true ); ?>
                <?php renderProBadge(); ?>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_download_enabled' ,"Downloads"); ?>
                <div  class="col-offset-left">
                    <h4 class="label">Extension of files to track as downloads:</h4>
                    <?php PYS()->render_tags_select_input( 'download_event_extensions' ); ?>
                    <small> Specific parameters: <i>download_type, download_name, download_url</i></small>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_comment_enabled',"Comments" ); ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <?php PYS()->render_checkbox_input( 'signal_adsense_enabled',"AdSense click" ,true); ?>
                <?php renderProBadge(); ?>
                <div  class="col-offset-left">
                    <small> Is not fired for Google, because Google has it's own support for AdSense</small>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">

                <div  class=" form-inline">
                    <?php PYS()->render_checkbox_input( 'signal_page_scroll_enabled',"trigger for scroll value:" ); ?>
                    <?php PYS()->render_number_input( 'signal_page_scroll_value','',false,100 ); ?>
                    <div>% (add %)</div>
                </div>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <div  class="form-inline">
                    <?php PYS()->render_checkbox_input( 'signal_time_on_page_enabled',"trigger for time on page value:" ); ?>
                    <?php PYS()->render_number_input( 'signal_time_on_page_value' ); ?>
                    <div> seconds (add seconds)</div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Search -->
<div class="card">
    <div class="card-header has_switch">
        <?php PYS()->render_switcher_input('search_event_enabled');?> Track Searches <?php cardCollapseBtn(); ?>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-11">
                <p>This event will be fired when a search is performed on your website.</p>
            </div>
            <div class="col-1">
                <?php renderPopoverButton( 'search_event' ); ?>
            </div>
        </div>

        <?php if ( Facebook()->enabled() ) : ?>
            <div class="row">
                <div class="col">
                    <?php Facebook()->render_switcher_input( 'search_event_enabled' ); ?>
                    <h4 class="switcher-label">Enable the Search event on Facebook</h4>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( GA()->enabled() ) : ?>
            <div class="row mb-1">
                <div class="col">
                    <?php GA()->render_switcher_input( 'search_event_enabled' ); ?>
                    <h4 class="switcher-label">Enable the search event on Google Analytics</h4>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col col-offset-left">
                    <?php GA()->render_checkbox_input( 'search_event_non_interactive',
                        'Non-interactive event' ); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">Enable the search event on Google Ads</h4>
                <?php renderProBadge('https://www.pixelyoursite.com/google-ads-tag/?utm_source=pys-free-plugin&utm_medium=pro-badge&utm_campaign=pro-feature') ?>
            </div>
        </div>

        <?php if ( Bing()->enabled() ) : ?>
            <div class="row">
                <div class="col">
                    <?php Bing()->render_switcher_input( 'search_event_enabled' ); ?>
                    <h4 class="switcher-label">Enable the Search event on Bing</h4>
                    <?php Bing()->renderAddonNotice(); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( Pinterest()->enabled() ) : ?>
            <div class="row">
                <div class="col">
                    <?php Pinterest()->render_switcher_input( 'search_event_enabled' ); ?>
                    <h4 class="switcher-label">Enable the Search event on Pinterest</h4>
                    <?php Pinterest()->renderAddonNotice(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Dynamic Ads for Blog Setup -->
<div class="card" >
    <div class="card-header has_switch" style="background-color:#cd6c46;color:white;">
        <?php PYS()->render_switcher_input('fdp_enabled');?>Dynamic Ads for Blog Setup <?php cardCollapseBtn(); ?>
    </div>
    <div class="card-body">
        <div class="row mt-3">
            <div class="col-11">
                This setup will help you to run Facebook Dynamic Product Ads for your blog content.
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="https://www.pixelyoursite.com/facebook-dynamic-product-ads-for-wordpress" target="_blank">Click here to learn how to do it</a>
            </div>
        </div>
        <?php if ( Facebook()->enabled() ) : ?>
            <hr/>
            <div class="row mt-3">
                <div class="col">
                    <?php Facebook()->render_switcher_input( 'fdp_use_own_pixel_id',false,true ); ?>
                    <h4 class="switcher-label">
                        Fire this events just for this Pixel ID with the
                        <a href="https://www.pixelyoursite.com/?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-ids" target="_blank">pro version</a>
                    </h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <label>Facebook Pixel ID:</label>
                    <?php Facebook()->render_text_input( 'fdp_pixel_id',"",true ); ?>
                </div>
            </div>

            <hr/>

            <div class="row mt-3">
                <div class="col">
                    <label>Content_type</label><?php
                    $options = array(
                        'product'    => 'Product',
                        ''           => 'Empty'
                    );
                    Facebook()->render_select_input( 'fdp_content_type',$options ); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <label>Currency:</label><?php
                    $options = array();
                    $cur = getPysCurrencySymbols();
                    foreach ($cur as  $key => $val) {
                        $options[$key]=$key;
                    }
                    Facebook()->render_select_input( 'fdp_currency',$options ); ?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col">
                    <?php Facebook()->render_switcher_input( 'fdp_view_content_enabled' ); ?>
                    <h4 class="switcher-label">Enable the ViewContent on every blog page</h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <?php Facebook()->render_switcher_input( 'fdp_view_category_enabled' ); ?>
                    <h4 class="switcher-label">Enable the ViewCategory on every blog categories page</h4>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-11">
                    <?php Facebook()->render_switcher_input( 'fdp_add_to_cart_enabled' ); ?>
                    <h4 class="switcher-label">Enable the AddToCart event on every blog page</h4>
                </div>

                <div class="col-11 form-inline col-offset-left">
                    <label>Value:</label>
                    <?php Facebook()->render_number_input( 'fdp_add_to_cart_value',"Value" ); ?>
                </div>

                <div class="col-11 form-inline col-offset-left">
                    <label>Fire the AddToCart when scroll to</label>
                    <?php Facebook()->render_number_input( 'fdp_add_to_cart_event_fire_scroll',50 ); ?>
                    <label>%</label>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-11">
                    <?php Facebook()->render_switcher_input( 'fdp_purchase_enabled' ); ?>
                    <h4 class="switcher-label">Enable the Purchase event on every blog page</h4>
                </div>
                <div class="col-11 form-inline col-offset-left">
                    <label>Value:</label>
                    <?php Facebook()->render_number_input( 'fdp_purchase_value',"Value" ); ?>
                </div>
                <div class="col-11 form-inline col-offset-left">
                    <label>Fire the Purchase event</label>

                    <?php
                    $options = array(
                        'scroll_pos'    => 'Page Scroll',
                        'comment'     => 'User commented',
                        'css_click'     => 'Click on CSS selector',
                        //Default event fires
                    );
                    Facebook()->render_select_input( 'fdp_purchase_event_fire',$options ); ?>
                    <span id="fdp_purchase_event_fire_scroll_block">
                        <?php Facebook()->render_number_input( 'fdp_purchase_event_fire_scroll',50 ); ?> <span>%</span>
                    </span>

                    <?php Facebook()->render_text_input( 'fdp_purchase_event_fire_css',"CSS selector"); ?>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <strong>You need to upload your blog posts into a Facebook Product Catalog.</strong> You can do this with our dedicated plugin:
                    <a href="https://www.pixelyoursite.com/wordpress-feed-facebook-dpa" target="_blank">Click Here</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Active Events stat -->
<div class="card">
    <div class="card-header">
        Active Events:
    </div>
    <div class="card-body show" style="display: block;">
        <?php
        $customCount = EventsCustom()->getCount();
        //$customFdp = EventsFdp()->getCount();
        $signalEvents = EventsSignal()->getCount();
        $wooEvents = EventsWoo()->getCount();
        $eddEvents = EventsEdd()->getCount();

        if($signalEvents > 0) {
            $signalEvents = 1;
        }

        if(PYS()->getOption('search_event_enabled')) {
            $signalEvents++;
        }

        $total = $customCount + $signalEvents + $wooEvents + $eddEvents;
        ?>
        <p><strong>You have <?=$total?> active events in total.</strong></p>
        <p>You have <?=$signalEvents?> global active events. You can control them on this page.</p>
        <p>You have <?=$customCount?> manually added active events. You can control them on the <a href="<?=buildAdminUrl( 'pixelyoursite', 'events' )?>">Events page</a>.</p>
        <?php if(isWooCommerceActive()) : ?>
            <p>You have <?=$wooEvents?> WooCommerce active events. You can control them on the <a href="<?=buildAdminUrl( 'pixelyoursite', 'woo' )?>">WooCommerce page</a>.</p>
        <?php endif; ?>
        <?php if(isEddActive()) : ?>
            <p>You have <?=$eddEvents?> EDD active events. You can control them on the <a href="<?=buildAdminUrl( 'pixelyoursite', 'edd' )?>">EDD page</a>.</p>
        <?php endif; ?>
        <p class="mt-5 small">We count each manually added event, regardless of its name or targeted tag.</p>
        <p class="small">We don't count the Dynamic Ads for Blog events.</p>
    </div>
</div>

<!-- About Parameters -->
<div class="card">
    <div class="card-header">
        About Parameters:
    </div>
    <div class="card-body show" style="display: block;">
        <p>Parameters add extra information to events.

        <p>They help you create Custom Audiences or Custom Conversions on Facebook, Goals, and Audiences on Google,
            Audiences on Pinterest, Conversions on Bing.</p>

        <p>The plugin tracks the following parameters by default for all the events and for all installed
            tags: <i>page_title, post_type, post_id, landing_page, event_url, user_role, plugin, event_time (pro),
                event_day (pro), event_month (pro), traffic_source (pro), UTMs (pro).</i></p>

        <p>Facebook, Pinterest, and Google Ads Page View event also tracks the following parameters: <i>tags, category</i>.</p>

        <p>You can add extra parameters to events configured on the Events tab. WooCommerce or Easy Digital
            Downloads events will have the e-commerce parameters specific to each tag.</p>

        <p>The Search event has the specific search parameter.</p>

        <p>The Signal event has various specific parameters, depending on the action that fires the event.</p>
    </div>
</div>

<!-- Control global param -->
<div class="card">
    <div class="card-header">
        Control the Global Parameters <?php cardCollapseBtn(); ?>
    </div>
    <div class="card-body" >
        <div class="row mt-3 mb-3">
            <div class="col-12">
                You will have these parameters for all events, and for all installed tags. We recommend to
                keep these parameters active, but if you start to get privacy warnings about some of them,
                you can turn those parameters OFF.
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <hr>
                <?php PYS()->render_switcher_input("enable_page_title_param");?>
                <h4 class="switcher-label">page_title</h4>
                <hr>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <?php PYS()->render_switcher_input("enable_post_type_param");?>
                <h4 class="switcher-label">post_type</h4>
                <hr>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <?php PYS()->render_switcher_input("enable_post_id_param");?>
                <h4 class="switcher-label">post_id</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php PYS()->render_switcher_input( 'enable_content_name_param' ); ?>
                <h4 class="switcher-label">content_name</h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php PYS()->render_switcher_input( 'enable_event_url_param' ); ?>
                <h4 class="switcher-label">event_url</h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php PYS()->render_switcher_input( 'enable_user_role_param' ); ?>
                <h4 class="switcher-label">user_role</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">landing_page(PRO)</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">event_time (PRO)</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">event_day (PRO)</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">event_month (PRO)</h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">traffic_source (PRO)</h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">UTMs (PRO)</h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">tags (PRO)</h4>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(); ?>
                <h4 class="switcher-label">categories (PRO)</h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(true); ?>
                <h4 class="switcher-label">search (mandatory)</h4>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php renderDummySwitcher(true); ?>
                <h4 class="switcher-label">plugin (mandatory)</h4>
                <hr>
            </div>
        </div>

    </div>
</div>

<h2 class="section-title mt-3">Global Settings</h2>

<div class="panel">
    <div class="row mb-3">
        <div class="col">
			<?php PYS()->render_switcher_input( 'debug_enabled' ); ?>
            <h4 class="switcher-label">Debugging mode. You will be able to see details about the events inside your
                browser console (developer tools).</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <?php PYS()->render_switcher_input( 'enable_remove_source_url_params' ); ?>
            <h4 class="switcher-label">Remove URL parameters from  <i>event_source_url</i></h4>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <?php PYS()->render_switcher_input( 'enable_remove_download_url_param' ); ?>
            <h4 class="switcher-label">Remove download_url parameters.</h4>
            <hr>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <?php renderDummySwitcher(); ?>
            <h4 class="switcher-label">Add enriched order's data to WooCommerce's default "New Order" email.<?php renderProBadge();?></h4>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <?php renderDummySwitcher(); ?>
            <h4 class="switcher-label">Add enriched order's data to WooCommerce's order details pages. <?php renderProBadge();?></h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col">
            <a href="https://www.youtube.com/watch?v=2oRF4LKaMaw" target="_blank">WooCommerce: track PURCHASE source (7:56) - wath now</a>
            <hr/>
        </div>
    </div>

    <div class="row form-group">
        <div class="col">
            <h4 class="label">Ignore these user roles from tracking:</h4>
			<?php PYS()->render_multi_select_input( 'do_not_track_user_roles', getAvailableUserRoles() ); ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h4 class="label">Permissions:</h4>
			<?php PYS()->render_multi_select_input( 'admin_permissions', getAvailableUserRoles() ); ?>
        </div>
    </div>
</div>

<div class="panel">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between">
                <span class="mt-2">Track more key actions with the PRO version:</span>
                <a target="_blank" class="btn btn-sm btn-primary float-right" href="https://www.pixelyoursite.com/facebook-pixel-plugin/buy-pixelyoursite-pro?utm_source=pixelyoursite-free-plugin&utm_medium=plugin&utm_campaign=free-plugin-upgrade-blue">UPGRADE</a>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="row justify-content-center">
    <div class="col-4">
        <button class="btn btn-block btn-save">Save Settings</button>
    </div>
</div>
