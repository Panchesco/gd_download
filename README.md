gd_download
===============

Simple plugin to force downloads from a directory.

##Usage

Add the gd_download tag to a template:

```{exp:gd_download file_name="somefilename.ext" path="path/to_file/from_webroot/filename.ext"}```

###Parameters


| Parameter | Description | Default | Options | 
| --- | --- | --- | --- | --- |
| file_name | filename of downloaded file | | |
| path | Path, including filename, to dowloadable file | |
                
####Notes
- To protect files based on user group, upload files to a non-web accessible directory
and limit template access for the template to the group/s that should have access.