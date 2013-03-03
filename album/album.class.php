<?php

require(PERCH_PATH.'/addons/fieldtypes/albumlist/albumlist.class.php');
require(PERCH_PATH.'/addons/apps/perch_gallery/runtime.php');

class PerchFieldType_album extends PerchFieldType_albumlist
{
   public function get_processed($raw=false) {
      // Merge default attributes with tag attributes
      $attr = array_merge(array(
         'template' => 'gallery.html'
      ), $this->Tag->get_attributes());
      // Run perch_album_gallery to render the selected album
      if(is_array($raw) && isset($raw['albumSlug'])) {
         $this->processed_output_is_markup = TRUE;
         return perch_gallery_album($raw['albumSlug'], array(
            'template' => $attr['template']
         ), TRUE);
      } else {
         return '';
      }
   }
}
