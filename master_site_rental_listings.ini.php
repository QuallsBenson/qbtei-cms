<?php /* This is a PHP data file */ if (!@$LOADSTRUCT) { die("This is not a program file."); }
return array (
  '_detailPage' => '',
  '_disableAdd' => '0',
  '_disableErase' => '0',
  '_disableModify' => '0',
  '_disablePreview' => '0',
  '_disableView' => '1',
  '_filenameFields' => 'building, num',
  '_hideRecordsFromDisabledAccounts' => '0',
  '_indent' => '0',
  '_listPage' => '',
  '_maxRecords' => '',
  '_maxRecordsPerUser' => '',
  '_perPageDefault' => '25',
  '_previewPage' => '',
  '_requiredPlugins' => '',
  '_tableName' => 'master_site_rental_listings',
  'listPageFields' => 'dragSortOrder, building, unit, archive',
  'listPageOrder' => 'dragSortOrder DESC',
  'listPageSearchFields' => '_all_',
  'menuHidden' => '0',
  'menuName' => 'Master Site Rental Listings',
  'menuOrder' => '0000000044',
  'menuType' => 'multi',
  'num' => array(
    'order' => 1,
    'type' => 'none',
    'label' => 'Record Number',
    'isSystemField' => '1',
  ),
  'createdDate' => array(
    'order' => 2,
    'type' => 'none',
    'label' => 'Created',
    'isSystemField' => '1',
  ),
  'createdByUserNum' => array(
    'order' => 3,
    'type' => 'none',
    'label' => 'Created By',
    'isSystemField' => '1',
  ),
  'updatedDate' => array(
    'order' => 4,
    'type' => 'none',
    'label' => 'Last Updated',
    'isSystemField' => '1',
  ),
  'updatedByUserNum' => array(
    'order' => 5,
    'type' => 'none',
    'label' => 'Last Updated By',
    'isSystemField' => '1',
  ),
  'dragSortOrder' => array(
    'order' => 6,
    'label' => 'Order',
    'type' => 'none',
  ),
  'archive' => array(
    'order' => 7,
    'label' => 'Archive?',
    'type' => 'checkbox',
    'fieldPrefix' => '',
    'checkedByDefault' => '0',
    'description' => '',
    'checkedValue' => 'Yes',
    'uncheckedValue' => 'No',
  ),
  'building' => array(
    'order' => 8,
    'label' => 'Building',
    'type' => 'list',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '1',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'query',
    'optionsQuery' => 'SELECT num, title
  FROM `<?php echo $TABLE_PREFIX ?>master_site_properties` ORDER BY title ASC',
  ),
  'unit' => array(
    'order' => 9,
    'label' => 'Unit',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'cross_street' => array(
    'order' => 10,
    'label' => 'Cross Street',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'area' => array(
    'order' => 11,
    'label' => 'Area',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'type' => array(
    'order' => 12,
    'label' => 'Type',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'rent' => array(
    'order' => 13,
    'label' => 'Rent',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'charges' => array(
    'order' => 14,
    'label' => 'Charges',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'size' => array(
    'order' => 15,
    'label' => 'Size',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '1',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'baths' => array(
    'order' => 16,
    'label' => 'Baths',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'approximate_square_feet' => array(
    'order' => 17,
    'label' => 'Approximate Square Feet',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'apartment_features' => array(
    'order' => 18,
    'label' => 'Apartment Features',
    'type' => 'list',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'checkboxes',
    'optionsType' => 'text',
    'optionsText' => 'A/C
Alcove Kitchen
Balcony
Balcony/Terrace
Bright
California Closets
Central Air/Heat
Charming
Cherry Cabinets
City Views
Common Courtyard
Corner Unit
Custom Cabinets
Decorative Fireplace
Dining Area
Dining Area With Oversized Windows
Dining Room
Dishwasher
Duplex
Duplex Unit
Easily Converts to a Jr. 1 Bedroom
East Exposure
Eat-In Kitchen
Elegant Pre-War Details
Elevator Building
Empire State Views
Exposed Brick
Fitness Center
Fitness Room
Floor-to-Ceiling Windows
French Doors
Full Separate Kitchen
Full Time Doorman/Concierge
Full Time Doorman
Furnished Rental
Garden Apartment
Garden View
Gas Fireplace
Granite Bath
Granite Countertops
Great Location
Great Share
Great Sunlight
Hardwood Floors
Heat & Hot Water Included
High Ceilings
Home Office
Huge Windows
Kitchen/Living Room Combo
Kitchenette
Large Foyer
Laundry
Laundry on Every Floor
Live/Work
Living/Dining Room Combo
Loft
Lots of Light
Low Maintenance
Marble Bath
Microwave
Must See
Near Subway
New Kitchen Cabinets & Appliances
New Renovation
Newly Renovated Bath
Nice Short Walk to Gramercy & Madison Sq. Parks
No Board Approval Required
North & West Exposure
North Exposure
Oak Stripped Hardwood Floors
On-Site Super
Open Kitchen
Original Pre-War Details
Oversized Windows
Park Views
Parquet Floors
Part-Time Doorman
Pass-Thru Kitchen
Patio
Penthouse Unit
Pets Allowed
Private Deck
Private Garden
Private Roof Garden
Private Storage
Quiet
Renovated
Renovated Bath with Large Window
Renovated Kitchen
River Views
Rooftop Deck
Roomy
Separate Kitchen
Shareable
Skylight
Sleep Loft
South Exposure
Sponsor Unit
Stainless Steel Appliances
Sunny
Terrace
Thru-the-Wall A/C
Tons of Closet Spaces
Top-Of-The-Line Renovation
Total Renovation
Unit Only - Prime Lease
Unit Only - Stabilized Lease
Walk-In Closet
Wall of Window w/Spectacular City Views
Washer/Dryer
Western Exposure
Windowed Kitchen',
  ),
  'other_apartment_features' => array(
    'order' => 19,
    'label' => 'Other Apartment Features',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => 'Please separate with commas (Bright, Must See, ect.)',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'apartment_brochure' => array(
    'order' => 20,
    'label' => 'Apartment Brochure',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'broker' => array(
    'order' => '21',
    'label' => 'Broker',
    'type' => 'list',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'listType' => 'pulldown',
    'optionsType' => 'table',
    'optionsTablename' => 'master_site_brokers',
    'optionsValueField' => 'num',
    'optionsLabelField' => 'broker_name',
  ),
  'open_house' => array(
    'order' => 22,
    'label' => 'Open House',
    'type' => 'textbox',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
    'autoFormat' => '1',
  ),
  'notes' => array(
    'order' => 23,
    'label' => 'Notes',
    'type' => 'textbox',
    'defaultContent' => '',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'fieldHeight' => '',
    'autoFormat' => '1',
  ),
  'virtual_tour_url' => array(
    'order' => 24,
    'label' => 'Virtual Tour URL',
    'type' => 'textfield',
    'defaultValue' => '',
    'fieldPrefix' => '',
    'description' => '',
    'fieldWidth' => '',
    'isPasswordField' => '0',
    'isRequired' => '0',
    'isUnique' => '0',
    'minLength' => '',
    'maxLength' => '',
    'charsetRule' => '',
    'charset' => '',
  ),
  'photo_gallery' => array(
    'order' => 25,
    'label' => 'Photo Gallery',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '0',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '999',
    'maxThumbnailWidth' => '450',
    'createThumbnails2' => '1',
    'maxThumbnailHeight2' => '999',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
  'floorplan' => array(
    'order' => 26,
    'label' => 'Floorplan',
    'type' => 'upload',
    'fieldPrefix' => '',
    'description' => '',
    'isRequired' => '0',
    'allowedExtensions' => 'gif,jpg,png,wmv,mov,swf,pdf',
    'checkMaxUploadSize' => '1',
    'maxUploadSizeKB' => '5120',
    'checkMaxUploads' => '1',
    'maxUploads' => '25',
    'resizeOversizedImages' => '1',
    'maxImageHeight' => '800',
    'maxImageWidth' => '600',
    'createThumbnails' => '1',
    'maxThumbnailHeight' => '150',
    'maxThumbnailWidth' => '150',
    'createThumbnails2' => '0',
    'maxThumbnailHeight2' => '150',
    'maxThumbnailWidth2' => '150',
    'createThumbnails3' => '0',
    'maxThumbnailHeight3' => '150',
    'maxThumbnailWidth3' => '150',
    'createThumbnails4' => '0',
    'maxThumbnailHeight4' => '150',
    'maxThumbnailWidth4' => '150',
    'useCustomUploadDir' => '0',
    'customUploadDir' => '',
    'customUploadUrl' => '',
    'infoField1' => 'Title',
    'infoField2' => 'Caption',
    'infoField3' => '',
    'infoField4' => '',
    'infoField5' => '',
  ),
);
?>