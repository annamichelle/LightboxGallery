LightboxGallery
===============

The **Lightbox Gallery** plugin adds three new layouts to Exhibit Builder. The first two are based on the default _Gallery_ and _File with Text_ layouts that ship with [Exhibit Builder](https://github.com/omeka/plugin-ExhibitBuilder). (One layout displays attached files in a gallery format, while the other allows you to choose a size for a single image and align it left or right.) Files displayed using these layouts link to a Lightbox overlay of a larger version of the image. The third layout, _Lightbox Book_, displays only the first image on the exhibit page but allows users to "page" through the rest of the images once they open Lightbox. Captions display underneath the large images in Lightbox, rather than underneath the thumbnail images.

The _Lightbox Gallery_ and _Lightbox File with Text_ layouts will assign the same Lightbox grouping to all items they add to a page. So, if you add multiple Lightbox Gallery or File with Text blocks to your exhibit page, all the items in those blocks will show up in the Lightbox gallery. (Files added with other layouts will not show up in the Lightbox gallery.)

The _Lightbox Book_ layout allows you the option to assign a unique identifier to images attached to the layout block. If you do, those images will open in their own Lightbox overlay and won't be grouped with other images added using Lightbox layouts.

[Exhibit Builder](https://github.com/omeka/plugin-ExhibitBuilder) was developed by the Roy Rosenzweig Center for History and New Media at George Mason University. They use [Lightbox2](https://github.com/lokesh/lightbox2), developed by Lokesh Dhakar.
