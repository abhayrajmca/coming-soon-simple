<div class="wrap settings-wrap" id="page-settings">
    <h2><?php _e('Settings','easy-coming-soon'); ?></h2>
    <div id="option-tree-header-wrap">
        <ul id="option-tree-header">
            <li id=""><a href="" target="_blank"></a></li>
            <li id="option-tree-version"><span><?php _e('Coming Soon Plugin','easy-coming-soon'); ?></span></li>
        </ul>
		
    </div>
    <div id="option-tree-settings-api">
    <div id="option-tree-sub-header"></div>
        <div class = "ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul>
				
                <li id="tab_create_setting"><a href="#section_general"><?php _e('General Settings','easy-coming-soon');?></a>
                </li>
				<li id="tab_design_setting"><a href="#section_design"><?php _e('Design','easy-coming-soon');?></a>
                </li>
                <li id="tab_notification_setting"><a href="#section_notification"><?php _e('Notification Settings','easy-coming-soon');?></a>
                </li>
              
            
               
            </ul>
    <div id="poststuff" class="metabox-holder">
        <div id="post-body">
			<div id="post-body-content">
    
    <div id="section_general" class = "postbox">
                    <div class="inside">
                        <div id="setting_theme_options_ui_text" class="format-settings">
                            <div class="format-setting-wrap">             
                    <?php load_template( dirname( __FILE__ ) . '/pages/header_page_settings.php' );  ?>    
                </div>
            </div>
        </div>
    </div>

    
	<div id="section_design" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
      <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        
						<?php  load_template( dirname( __FILE__ ) . '/pages/design_page_settings.php' ); ?>
                                              
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>


    <div id="section_notification" class = "postbox">
        <div class="inside">
            <div id="design_customization_settings" class="format-settings">
                <div class="format-setting-wrap">
      <div class = "format-setting type-textarea has-desc">
        <div class = "format-setting-inner">
        
        					<?php  load_template( dirname( __FILE__ ) . '/pages/notification_page_setting.php' ); ?>
                                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

 
		</div>
    </div>
    </div>
	<div class="webriti-submenu" style="height:35px;">			
            <div class="webriti-submenu-links" style="margin-top:5px;">
			<form method="POST">
				<input type="submit" onclick="return confirm( 'Click OK to reset Plugin data. Theme settings will be lost!' );" value="Restore All Defaults" name="restore_all_defaults" id="restore_all_defaults" class="reset-button btn">
			<form>
            </div><!-- webriti-submenu-links -->
        </div>
        <div class="clear"></div>
        </div>
    </div>
</div>

<?php
$general_default_settings = array(

    // general page settings

    'status'=>'1',
    'background'=>'',
    'title'=>'',
    'descrip'=>'',
    'google_code'=>'',
    'fb'=>'',
    'twit'=>'',
    'gp'=>''

    );
$design_page_setting =  array(

    // design page settings
    'background_color'=>'#21759B',
    'title_color'=>'#ffffff',
    'descrip_color'=>'#ffffff',
    'title_font_size'=>'30',
    'title_font_format'=>'Arial Black, sans-serif',
    'description_font_size'=>'20',
    'description_font_format'=>'Verdana, Geneva, sans-serif',
    'background_effect'=>'0'

    );
$notification_default_settings = array(

    // notification page settings

    'mailto'=>'no',
    'email_address'=>'',
    'message'=>__('Thanks for subscribing this page','easy-coming-soon'),
    'sb_btn'=>'',
    'placeholder_text'=>''

    );
// Restore all defaults
if(isset($_POST['restore_all_defaults'])) 
	{
		update_option('soon_page_settings',$general_default_settings);
        update_option('soon_page_desgin_settings',$design_page_setting);
        update_option('soon_page_notification_settings',$notification_default_settings);
	}
?>