<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


             $plugin_info        = array(  
                'pi_name'        => 'Good at Downloads',  
                'pi_version'     => '1.1.0',  
                'pi_author'      => 'Godat Design/Richard Whitmer',  
                'pi_author_url'  => 'http://www.godatdesign.com',  
                'pi_description' => 'Forces a file download of a filename passed in the URL from a directory passed in the plugin params',  
                'pi_usage'       => Gd_download::usage()  
                );
                
            class Gd_download {

               
               function __construct()
               {
                
                
                $this->file_name = ee()->TMPL->fetch_param('file_name');
                $this->path = ee()->TMPL->fetch_param('path');
                
                
                $data = file_get_contents($this->path);
                
                ee()->load->helper('download');
                
                if($this->file_name && $data)
                {
                    force_download($this->file_name,$data);
                }
                    
               }
               
               
                 // ----------------------------------------  
                //  Plugin Usage  
                // ----------------------------------------  
                  
                // This function describes how the plugin is used.  
                //  Make sure and use output buffering  
                  
                public static function usage()  
                {  
                ob_start();                
                ?>
                
                Simple plugin to force downloads from a directory.
                In template you're calling the file from, add the following:
                {exp:gd_download file_name="somefilename.ext" path="path/to_file/from_webroot/filename.ext"}
                
                To protect files based on user group, upload files to a non-web accessible directory
                and limit template access for the template to the group/s that should have access                
                

                <?php
                
                $buffer = ob_get_contents();
                  
                ob_end_clean();   
                  
                return $buffer;  
                }
          

            /* End of file pi.gd_download.php */  
            /* Location: ./system/expressionengine/user/addons/gd_download/pi.gd_download.php */  
            
            
            }
