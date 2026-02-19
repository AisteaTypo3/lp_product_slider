# aistea/lp_product_slider

TYPO3 v13 LTS extension providing content elements:

- `aistea_lp_product_slider` (vertical product viewer with image/video/3D/color gallery)
- `aistea_lp_horizontal_slider` (horizontal story slider with image, image sequence, or one-shot video)
- `aistea_lp_image_sequence` (single image-sequence element with manual file list or TYPO3 file collection)

## Three.js shipping

3D is optional and initialized only when a `model3d` slide is opened. The extension loads modules from local extension assets:

- `Resources/Public/JavaScript/Vendor/three.module.js`
- `Resources/Public/JavaScript/Vendor/GLTFLoader.js`

The provided files are placeholders. For production 3D rendering, replace them with the official ESM files from the Three.js project (same filenames).

No external CDN is required.
