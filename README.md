perch-fieldtype-album
=====================

Album field type for Perch Gallery
----------------------------------

This is a simple extension to the albumlist field type shipped with 
the official Perch Gallery application. Using this field type you 
can render e gallery album in the page as any other content normally 
rendered by `perch_content`.


Requirements
------------

This field type requires the perch_gallery application installed under:

    PERCH_PATH/addons/apps/perch_gallery

And the accompaigning `albumlist` field type installed as:

    PERCH_PATH/addons/fieldtypes/album


Template tag
------------

    <perch:content id="myAlbum" type="album" label="Select album" template="gallery.html"/>

The selected album will be rendered as a call to the 
`perch_gallery_album` function would do, using the template you set 
in the `template` attribute (default: "gallery.html"). However, keep 
in mind that if you use `perch_content` to define the region in 
which to display the album, the contents will be rendered at page 
saving time, so any subsequent change to the selected album won't 
be reflected in the page content until the next save.
