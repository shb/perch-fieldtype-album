perch-fieldtype-album
=====================

Album field type for Perch Gallery
----------------------------------

This is a simple extension to the *albumlist* field type shipped with 
the official Perch Gallery application. Using this field type you 
can render a gallery album inside a page as you would do with any other
content normally rendered by the `perch_content()` function. This will
save you from having to write a full page template hard-coding the album
position, whereas enabling your users to choose, and edit, through
the Perch backend interface, what album they want and where they want it to
to show on the site's pages.


Requirements
------------

This field type requires the `perch_gallery` application installed under:

    $PERCH_PATH/addons/apps/perch_gallery

And the accompaigning `albumlist` field type installed as:

    $PERCH_PATH/addons/fieldtypes/album

Where `$PERCH_PATH` is the Perch installation path set inside Perch
configuration file.


Template tag
------------
Put the following tag inside your content templates wherever you want the
user to be able to insert an image gallery on the page.

    <perch:content id="myAlbum" type="album" label="Select album" template="gallery.html"/>

The image album specified by the `id` attribute (*myAlbum*) will be
rendered upon page save as a call to the 
`perch_gallery_album()` function would do, employing the template set 
in the `template` attribute (default: *gallery.html*).

Please keep in mind that by using this field type, the gallery
will only be rendered at page-save time, rather than at every page request.
Thus, any change in the album must be followed by a resave of the interested
pages in order to put the album changes on-line.
