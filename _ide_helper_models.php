<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $type
 * @property string|null $latitude
 * @property string|null $longitude
 * @property int $is_saved
 * @property string|null $area
 * @property string|null $addressable_type
 * @property int|null $addressable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $addressable
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddressableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereIsSaved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AdsLaboratory
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Attachment|null $photo
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|AdsLaboratory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdsLaboratory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|AdsLaboratory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 */
	class AdsLaboratory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AdsStore
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Attachment|null $photo
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|AdsStore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdsStore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|AdsStore query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 */
	class AdsStore extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Analysis
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property int $time
 * @property string $time_type
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnalyticsLaboratory[] $analytics
 * @property-read int|null $analytics_count
 * @property-read mixed $photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $photos
 * @property-read int|null $photos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereTimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Analysis whereUpdatedAt($value)
 */
	class Analysis extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AnalyticsLaboratory
 *
 * @property int $id
 * @property int|null $laboratory_id
 * @property int|null $analysis_id
 * @property float|null $price
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Analysis|null $analysis
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CartItem[] $cartItems
 * @property-read int|null $cart_items_count
 * @property-read \App\Models\Laboratory|null $laboratory
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory whereAnalysisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory whereLaboratoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnalyticsLaboratory whereUpdatedAt($value)
 */
	class AnalyticsLaboratory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attachment
 *
 * @property int $id
 * @property string $path
 * @property string|null $type
 * @property string|null $usage
 * @property string $attachmentable_type
 * @property int $attachmentable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $attachmentable
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachmentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereAttachmentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attachment whereUsage($value)
 */
	class Attachment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BloodType
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType query()
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BloodType whereUpdatedAt($value)
 */
	class BloodType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Body
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $order_id
 * @property string $full_name
 * @property string $national_id
 * @property string $death_date
 * @property string $transport_place
 * @property string $death_number
 * @property string $reporter_name
 * @property string $phone
 * @property string $relative
 * @property string $reporter_phone
 * @property string $notes
 * @property-read \App\Models\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|Body newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Body newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Body query()
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereDeathDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereDeathNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereRelative($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereReporterName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereReporterPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereTransportPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Body whereUpdatedAt($value)
 */
	class Body extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Car
 *
 * @property int $id
 * @property string|null $car_number
 * @property string|null $license_number
 * @property string|null $license_date
 * @property \App\Models\CarType $car_type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Region[] $regions
 * @property-read int|null $regions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Car query()
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCarNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCarType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereLicenseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereLicenseNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Car whereUpdatedAt($value)
 */
	class Car extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarType
 *
 * @property int $id
 * @property string|null $name
 * @property string $km_price
 * @property string $minute_price
 * @property string $min_price
 * @property int $is_active
 * @property int|null $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $deliveries
 * @property-read int|null $deliveries_count
 * @property-read \App\Models\Order $orders
 * @method static \Illuminate\Database\Eloquent\Builder|CarType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereKmPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereMinPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereMinutePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarType whereUpdatedAt($value)
 */
	class CarType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarTypeCity
 *
 * @property int $car_type_id
 * @property int $city_id
 * @property float $shipping
 * @property int $is_shipping
 * @property-read \App\Models\CarType $catType
 * @property-read \App\Models\City $city
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeCity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeCity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeCity query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeCity whereCarTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeCity whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeCity whereIsShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeCity whereShipping($value)
 */
	class CarTypeCity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarTypeGovernateShipping
 *
 * @property int $car_type_id
 * @property int $governorate_shipping_id
 * @property float $shipping
 * @property int $is_shipping
 * @property-read \App\Models\CarType $catType
 * @property-read \App\Models\GovernorateShipping $governateShipping
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeGovernateShipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeGovernateShipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeGovernateShipping query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeGovernateShipping whereCarTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeGovernateShipping whereGovernorateShippingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeGovernateShipping whereIsShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CarTypeGovernateShipping whereShipping($value)
 */
	class CarTypeGovernateShipping extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cart
 *
 * @property int $id
 * @property int $client_id
 * @property int $medical_id
 * @property string $type
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CartItem[] $cartItems
 * @property-read int|null $cart_items_count
 * @property-read \App\Models\Client $client
 * @property-read mixed $status_text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereMedicalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 */
	class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CartItem
 *
 * @property int $id
 * @property int $item_id
 * @property int $cart_id
 * @property float $price
 * @property float $total_price
 * @property int $quantity
 * @property float $offer_price
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cart $cart
 * @property-read \App\Models\AnalyticsLaboratory $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Medicine $medicine
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereUpdatedAt($value)
 */
	class CartItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Categoriable
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Categoriable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoriable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categoriable query()
 */
	class Categoriable extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string|null $type
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CharitableActor
 *
 * @property int $id
 * @property string $name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor query()
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CharitableActor whereUpdatedAt($value)
 */
	class CharitableActor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChatConsulations
 *
 * @property int $id
 * @property int|null $from
 * @property int|null $to
 * @property int|null $medical_consulation_id
 * @property string $sender_type
 * @property string $message
 * @property string $message_type
 * @property int $is_read
 * @property string|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MedicalConsulation[] $medicalConsulation
 * @property-read int|null $medical_consulation_count
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereMedicalConsulationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereMessageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereSenderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatConsulations whereUpdatedAt($value)
 */
	class ChatConsulations extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChatMessages
 *
 * @property int $id
 * @property int|null $from
 * @property int|null $to
 * @property int|null $user_id
 * @property int|null $order_id
 * @property string $type
 * @property string $message
 * @property int $is_read
 * @property string $message_type
 * @property int|null $read_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orderMessages
 * @property-read int|null $order_messages_count
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereMessageType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereReadBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessages whereUserId($value)
 */
	class ChatMessages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChronicDisease
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChronicDisease whereUpdatedAt($value)
 */
	class ChronicDisease extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $name
 * @property float $shipping
 * @property int $is_shipping
 * @property int $state_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarTypeCity[] $carTypeCity
 * @property-read int|null $car_type_city_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Region[] $regions
 * @property-read int|null $regions_count
 * @property-read \App\Models\State $state
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereIsShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Client
 *
 * @property int $id
 * @property int|null $region_id
 * @property int|null $country_id
 * @property string|null $name
 * @property string|null $phone
 * @property string $type
 * @property string|null $username
 * @property string|null $password
 * @property string|null $pin_code
 * @property string|null $pin_code_date_expired
 * @property string|null $national_id
 * @property string|null $chronic_diseases
 * @property float|null $length
 * @property float|null $weight
 * @property int|null $blood_type_id
 * @property string|null $nationality
 * @property string|null $gender
 * @property \Illuminate\Support\Carbon|null $d_o_b
 * @property string|null $insurance_number
 * @property int|null $hospital_client_id
 * @property string|null $notes
 * @property int $accept
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $last_active
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OauthAccessToken[] $AuthAccessToken
 * @property-read int|null $auth_access_token_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $allOrders
 * @property-read int|null $all_orders_count
 * @property-read \App\Models\BloodType|null $bloodType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cart[] $carts
 * @property-read int|null $carts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChronicDisease[] $clientDiseases
 * @property-read int|null $client_diseases_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contact[] $contacts
 * @property-read int|null $contacts_count
 * @property-read \App\Models\Country|null $country
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $couponOrders
 * @property-read int|null $coupon_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CreditCard[] $credit_cards
 * @property-read int|null $credit_cards_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $currentOrders
 * @property-read int|null $current_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $deliveredOrders
 * @property-read int|null $delivered_orders_count
 * @property-read mixed $age
 * @property-read mixed $points
 * @property-read mixed $wallet_balance
 * @property-read \App\Models\HospitalClient|null $hospitalClient
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MedicalOrder[] $medicalOrders
 * @property-read int|null $medical_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MedicalReservation[] $medicalReservations
 * @property-read int|null $medical_reservations_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\Attachment|null $photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PointsTransaction[] $pointsTransactions
 * @property-read int|null $points_transactions_count
 * @property-read \App\Models\Region|null $region
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Reservation[] $reservations
 * @property-read int|null $reservations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Token[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WalletTransaction[] $walletTransactions
 * @property-read int|null $wallet_transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAccept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereBloodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereChronicDiseases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereDOB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereHospitalClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereInsuranceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereLastActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePinCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePinCodeDateExpired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereWeight($value)
 */
	class Client extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Contact
 *
 * @property int $id
 * @property int|null $contact_reason_id
 * @property string|null $name
 * @property string|null $phone
 * @property string $contact
 * @property int $is_read
 * @property string|null $contactable_type
 * @property int|null $contactable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $contactable
 * @property-read \App\Models\ContactReason|null $reason
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereContactableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact whereUpdatedAt($value)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactReason
 *
 * @property int $id
 * @property string $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contact[] $contacts
 * @property-read int|null $contacts_count
 * @method static \Illuminate\Database\Eloquent\Builder|ContactReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactReason query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactReason whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactReason whereUpdatedAt($value)
 */
	class ContactReason extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property string|null $short_name
 * @property string|null $nationality
 * @property string|null $code
 * @property string|null $regex
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereRegex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereShortName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string $code
 * @property int $use_frequency
 * @property string $expired_date
 * @property string $start_date
 * @property float $amount
 * @property string $type
 * @property int $is_active
 * @property string $min_discount
 * @property string|null $max_discount
 * @property string $cut_from
 * @property int $max_one_client_use
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $usedOrders
 * @property-read int|null $used_orders_count
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCutFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereExpiredDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMaxDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMaxOneClientUse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereMinDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUseFrequency($value)
 */
	class Coupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CreditCard
 *
 * @property int $id
 * @property int $client_id
 * @property string $name
 * @property string $number
 * @property string $cvv_code
 * @property string $expired_year
 * @property string $expired_month
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client $client
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard query()
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereCvvCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereExpiredMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereExpiredYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CreditCard whereUpdatedAt($value)
 */
	class CreditCard extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Date
 *
 * @property int $id
 * @property int $day_id
 * @property string $start
 * @property string $end
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Day $day
 * @method static \Illuminate\Database\Eloquent\Builder|Date newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Date newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Date query()
 * @method static \Illuminate\Database\Eloquent\Builder|Date whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Date whereDayId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Date whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Date whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Date whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Date whereUpdatedAt($value)
 */
	class Date extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Day
 *
 * @property int $id
 * @property string $day
 * @property string $daieable_type
 * @property int $daieable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $daieable
 * @property-read mixed $day_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Date[] $shifts
 * @property-read int|null $shifts_count
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Day newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Day newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Day query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereDaieableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereDaieableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Day whereUpdatedAt($value)
 */
	class Day extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Degree
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Degree newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Degree newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Degree query()
 */
	class Degree extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Delivery
 *
 * @property int $id
 * @property int $region_id
 * @property int $hospital_id
 * @property int|null $car_type_id
 * @property string $name
 * @property string $user_name
 * @property string $phone
 * @property string|null $password
 * @property string|null $pin_code
 * @property string|null $pin_code_date_expired
 * @property string $gender
 * @property string $d_o_b
 * @property string|null $nationality
 * @property string $status
 * @property string $types
 * @property int $accept_privacy
 * @property int $rate
 * @property string|null $email
 * @property string $car_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $longitude
 * @property string|null $latitude
 * @property int $accept_order_limit
 * @property-read \App\Models\CarType|null $car
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Contact[] $contacts
 * @property-read int|null $contacts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeliveryRejectReasons[] $deliveryRejectReasons
 * @property-read int|null $delivery_reject_reasons_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $eventOrders
 * @property-read int|null $event_orders_count
 * @property-read mixed $case
 * @property-read mixed $case_label
 * @property-read mixed $photo
 * @property-read mixed $points
 * @property-read mixed $transport_photo
 * @property-read mixed $wallet_balance
 * @property-read \App\Models\Hospital $hospital
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $photos
 * @property-read int|null $photos_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PointsTransaction[] $pointsTransactions
 * @property-read int|null $points_transactions_count
 * @property-read \App\Models\Region $region
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $requestEventOrders
 * @property-read int|null $request_event_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Review[] $reviews
 * @property-read int|null $reviews_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Token[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\WalletTransaction[] $walletTransactions
 * @property-read int|null $wallet_transactions_count
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery checkArea($points)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereAcceptOrderLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereAcceptPrivacy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereCarNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereCarTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereDOB($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereHospitalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery wherePinCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery wherePinCodeDateExpired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereTypes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Delivery whereUserName($value)
 */
	class Delivery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DeliveryRejectReasons
 *
 * @property int $id
 * @property int $order_id
 * @property int|null $delivery_id
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property int $reject_order_reason_id
 * @property string $description
 * @property string $type
 * @property string $status
 * @property string|null $rejectable_type
 * @property int|null $rejectable_id
 * @property-read \App\Models\Delivery|null $delivery
 * @property-read \App\Models\Order $order
 * @property-read \App\Models\RejectOrderReason $rejectOrderReason
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $rejectable
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons accepted()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons query()
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons type($type)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereDeliveryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereRejectOrderReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereRejectableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereRejectableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DeliveryRejectReasons whereUpdatedAt($value)
 */
	class DeliveryRejectReasons extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Job[] $jobs
 * @property-read int|null $jobs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 */
	class Department extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Doctor
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string $gender
 * @property string|null $description
 * @property string|null $degree
 * @property int|null $specialty_id
 * @property int|null $region_id
 * @property int|null $city_id
 * @property string $address
 * @property string|null $auto_message
 * @property int|null $medical_price
 * @property int|null $visit_price
 * @property string|null $password
 * @property string|null $pin_code
 * @property string|null $pin_code_date_expired
 * @property int|null $rate
 * @property string $status
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\City|null $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read mixed $photo
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $photos
 * @property-read int|null $photos_count
 * @property-read \App\Models\Region|null $region
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Region[] $regions
 * @property-read int|null $regions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shift[] $shifts
 * @property-read int|null $shifts_count
 * @property-read \App\Models\Specialty|null $specialty
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor checkActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor newQuery()
 * @method static \Illuminate\Database\Query\Builder|Doctor onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereAutoMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereDegree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereMedicalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePinCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor wherePinCodeDateExpired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereSpecialtyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Doctor whereVisitPrice($value)
 * @method static \Illuminate\Database\Query\Builder|Doctor withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Doctor withoutTrashed()
 */
	class Doctor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DoctorCity
 *
 * @property-read \App\Models\City $city
 * @property-read \App\Models\Doctor $doctor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorCity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorCity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorCity query()
 */
	class DoctorCity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DoctorRegion
 *
 * @property int $doctor_id
 * @property int $region_id
 * @property-read \App\Models\Doctor $doctor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Region $region
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorRegion query()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorRegion whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorRegion whereRegionId($value)
 */
	class DoctorRegion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DoctorReviews
 *
 * @property int $id
 * @property int $doctor_id
 * @property int|null $client_id
 * @property int|null $medical_consulation_id
 * @property int $rate
 * @property string $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client|null $client
 * @property-read \App\Models\Doctor $doctor
 * @property-read \App\Models\MedicalConsulation|null $medicalConsulation
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews query()
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereMedicalConsulationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DoctorReviews whereUpdatedAt($value)
 */
	class DoctorReviews extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EmergencyNumber
 *
 * @property int $id
 * @property string $title
 * @property string $number
 * @property int $is_active
 * @property int|null $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attachment|null $attachment
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber query()
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EmergencyNumber whereUpdatedAt($value)
 */
	class EmergencyNumber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GovernorateShipping
 *
 * @property int $id
 * @property int $from
 * @property int $to
 * @property float $shipping
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CarTypeGovernateShipping[] $carTypeGovernateShipping
 * @property-read int|null $car_type_governate_shipping_count
 * @property-read \App\Models\State $governorateFrom
 * @property-read \App\Models\State $governorateTo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GovernorateShipping whereUpdatedAt($value)
 */
	class GovernorateShipping extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hospital
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $description
 * @property int $city_id
 * @property int $region_id
 * @property string $latitude
 * @property string $longitude
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $Roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $ambulances
 * @property-read int|null $ambulances_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HospitalClient[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $events
 * @property-read int|null $events_count
 * @property-read mixed $hospital_status
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HospitalUser[] $hospitalUsers
 * @property-read int|null $hospital_users_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orderDoctors
 * @property-read int|null $order_doctors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orderNurses
 * @property-read int|null $order_nurses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeliveryRejectReasons[] $orderRejectReasons
 * @property-read int|null $order_reject_reasons_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $requestOrderDoctors
 * @property-read int|null $request_order_doctors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $requestOrderNurses
 * @property-read int|null $request_order_nurses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $requestOrders
 * @property-read int|null $request_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Review[] $reviews
 * @property-read int|null $reviews_count
 * @property-read \App\Models\Service $service
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HospitalUser[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital checkActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital checkArea($points)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hospital whereUpdatedAt($value)
 */
	class Hospital extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HospitalClient
 *
 * @property int $id
 * @property int $client_id
 * @property int $hospital_id
 * @property string $user_name
 * @property string|null $insurance_number
 * @property int|null $discount
 * @property string|null $end_date
 * @property string $password
 * @property string|null $remember_token
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client $client
 * @property-read \App\Models\Hospital $hospital
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereHospitalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereInsuranceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalClient whereUserName($value)
 */
	class HospitalClient extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HospitalUser
 *
 * @property int $id
 * @property int $hospital_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Hospital $hospital
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereHospitalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HospitalUser whereUpdatedAt($value)
 */
	class HospitalUser extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Job
 *
 * @property int $id
 * @property string $title
 * @property string $exp
 * @property string $education
 * @property int $country_id
 * @property int $department_id
 * @property int $is_open
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobApplication[] $applications
 * @property-read int|null $applications_count
 * @property-read \App\Models\Country $country
 * @property-read \App\Models\Department $department
 * @method static \Illuminate\Database\Eloquent\Builder|Job isOpen()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereEducation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereUpdatedAt($value)
 */
	class Job extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobApplication
 *
 * @property int $id
 * @property string $f_name
 * @property string $l_name
 * @property int $job_id
 * @property string $phone
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_seen
 * @property-read \App\Models\Attachment|null $photo
 * @property-read \App\Models\Job $job
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereIsSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobApplication whereUpdatedAt($value)
 */
	class JobApplication extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Laboratory
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $doctor_name
 * @property string $type
 * @property string|null $phone
 * @property string|null $phone_2
 * @property string|null $email
 * @property string|null $date_type
 * @property int $region_id
 * @property string|null $description
 * @property string $address
 * @property string|null $auto_message
 * @property int $is_visit
 * @property int|null $visit_price
 * @property string|null $password
 * @property string|null $pin_code
 * @property string|null $pin_code_date_expired
 * @property int|null $rate
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnalyticsLaboratory[] $analytics
 * @property-read int|null $analytics_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Day[] $days
 * @property-read int|null $days_count
 * @property-read mixed $photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MedicalOrder[] $medicalOrders
 * @property-read int|null $medical_orders_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $photos
 * @property-read int|null $photos_count
 * @property-read \App\Models\Region $region
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Shift[] $shifts
 * @property-read int|null $shifts_count
 * @property-read \App\Models\Specialty $specialty
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory checkActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory newQuery()
 * @method static \Illuminate\Database\Query\Builder|Laboratory onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereAutoMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereDateType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereDoctorName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereIsVisit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory wherePinCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory wherePinCodeDateExpired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Laboratory whereVisitPrice($value)
 * @method static \Illuminate\Database\Query\Builder|Laboratory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Laboratory withoutTrashed()
 */
	class Laboratory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LaboratoryRegion
 *
 * @property-read \App\Models\Laboratory $laboratory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Region $region
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LaboratoryRegion query()
 */
	class LaboratoryRegion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Log
 *
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property string $title
 * @property string|null $description
 * @property string|null $logable_type
 * @property int|null $logable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $admin
 * @property-read \App\Models\Client $client
 * @property-read \App\Models\Delivery $delivery
 * @property-read \App\Models\Doctor $doctor
 * @property-read mixed $model_url
 * @property-read mixed $type_text
 * @property-read mixed $user
 * @property-read mixed $user_url
 * @property-read \App\Models\Hospital $hospital
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $logable
 * @method static \Illuminate\Database\Eloquent\Builder|Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Log query()
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereLogableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereLogableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Log whereUserId($value)
 */
	class Log extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalConsulation
 *
 * @property int $id
 * @property int|null $client_id
 * @property int|null $doctor_id
 * @property string $status
 * @property string|null $description
 * @property string|null $reason
 * @property string|null $medical_date_at
 * @property int|null $price
 * @property int|null $amount_paid
 * @property string|null $paid_at
 * @property string|null $payment_method
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client|null $client
 * @property-read \App\Models\Doctor|null $doctor
 * @property-read mixed $client_status_text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MedicalConsulationDate[] $medicalDates
 * @property-read int|null $medical_dates_count
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation query()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereMedicalDateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation wherePaidAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulation whereUpdatedAt($value)
 */
	class MedicalConsulation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalConsulationDate
 *
 * @property-read \App\Models\MedicalConsulation $medicalConsulation
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationDate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationDate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationDate query()
 */
	class MedicalConsulationDate extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalConsulationStatus
 *
 * @property int $id
 * @property int $medical_consulation_id
 * @property string $status
 * @property string|null $editable_type
 * @property int|null $editable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\MedicalConsulation $medicalConsulation
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus whereEditableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus whereEditableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus whereMedicalConsulationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalConsulationStatus whereUpdatedAt($value)
 */
	class MedicalConsulationStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalOrder
 *
 * @property int $id
 * @property int $client_id
 * @property string $medicalable_type
 * @property int $medicalable_id
 * @property int $country_id
 * @property string|null $time_range
 * @property string|null $schedule_date
 * @property int|null $coupon_id
 * @property int|null $delivery_id
 * @property string|null $address
 * @property string|null $photo
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string $phone
 * @property string|null $other_phone
 * @property float $price
 * @property float $shipping
 * @property float $discount
 * @property float $total
 * @property string $payment_method
 * @property string|null $status
 * @property int $active
 * @property string|null $cancel_note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client $client
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read mixed $client_status_text
 * @property-read mixed $medical_type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Laboratory $medical
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MedicalOrderItem[] $medicalOrderItems
 * @property-read int|null $medical_order_items_count
 * @property-read \App\Models\MedicalOrderMeta|null $medicalOrderMeta
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $medicalable
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereCancelNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereDeliveryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereMedicalableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereMedicalableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereOtherPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereScheduleDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereTimeRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrder whereUpdatedAt($value)
 */
	class MedicalOrder extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalOrderItem
 *
 * @property int $id
 * @property int $item_id
 * @property int $medical_order_id
 * @property float $price
 * @property float $total_price
 * @property int $quantity
 * @property float $offer_price
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\MedicalOrder $medicalOrder
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereMedicalOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderItem whereUpdatedAt($value)
 */
	class MedicalOrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalOrderMeta
 *
 * @property int $id
 * @property int $medical_order_id
 * @property int|null $city_id
 * @property int|null $region_id
 * @property string|null $street
 * @property string|null $building_no
 * @property string|null $floor_no
 * @property string|null $apartment_no
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City|null $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\MedicalOrder $medicalOrder
 * @property-read \App\Models\Region|null $region
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereApartmentNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereBuildingNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereFloorNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereMedicalOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalOrderMeta whereUpdatedAt($value)
 */
	class MedicalOrderMeta extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicalReservation
 *
 * @property int $id
 * @property int $doctor_id
 * @property int $client_id
 * @property int|null $coupon_id
 * @property string|null $reservation_date
 * @property string|null $day
 * @property string|null $start_time
 * @property string|null $end_time
 * @property string|null $price
 * @property float|null $offer_price
 * @property float|null $total
 * @property string|null $amount_paid
 * @property string|null $remaining_amount
 * @property int|null $payment_method_id
 * @property string $status
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client $client
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read \App\Models\Doctor $doctor
 * @property-read mixed $status_text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\PaymentMethod|null $paymentMethod
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereRemainingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereReservationDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicalReservation whereUpdatedAt($value)
 */
	class MedicalReservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Medicine
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $description
 * @property float $price
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnalyticsLaboratory[] $analytics
 * @property-read int|null $analytics_count
 * @property-read mixed $photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pharmacy[] $pharmacies
 * @property-read int|null $pharmacies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $photos
 * @property-read int|null $photos_count
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicine whereUpdatedAt($value)
 */
	class Medicine extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MedicinePharmacy
 *
 * @property int $id
 * @property int|null $pharmacy_id
 * @property int|null $medicine_id
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Medicine|null $medicine
 * @property-read \App\Models\Pharmacy|null $pharmacy
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy whereMedicineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy wherePharmacyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MedicinePharmacy whereUpdatedAt($value)
 */
	class MedicinePharmacy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notifiable
 *
 * @property int $id
 * @property int $notification_id
 * @property int $is_read
 * @property string $notifiable_type
 * @property int $notifiable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Notification $notification
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable whereNotificationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notifiable whereUpdatedAt($value)
 */
	class Notifiable extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notification
 *
 * @property int $id
 * @property string $title
 * @property string|null $body
 * @property string|null $notifiable_type
 * @property int|null $notifiable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $deliveries
 * @property-read int|null $deliveries_count
 * @property-read mixed $is_general
 * @property-read mixed $photo
 * @property-read mixed $resources
 * @property-read mixed $type
 * @property-read \App\Models\Attachment|null $image
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $notifiable
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\NursingDegree
 *
 * @property int $id
 * @property string $name
 * @property string $time_type
 * @property string|null $price
 * @property int $active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree whereTimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NursingDegree whereUpdatedAt($value)
 */
	class NursingDegree extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OauthAccessToken
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $client_id
 * @property string|null $name
 * @property string|null $scopes
 * @property int $revoked
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $expires_at
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereExpiresAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereScopes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OauthAccessToken whereUserId($value)
 */
	class OauthAccessToken extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int|null $coupon_id
 * @property string|null $description
 * @property int|null $car_type_id
 * @property int|null $pharmacy_id
 * @property int|null $delivery_id
 * @property int|null $hospital_id
 * @property int|null $service_id
 * @property int|null $client_id
 * @property int|null $start_address_id
 * @property int|null $end_address_id
 * @property int|null $country_id
 * @property string|null $start_price_range
 * @property string|null $end_price_range
 * @property string|null $amount_paid
 * @property string|null $remaining_amount
 * @property string|null $real_price
 * @property float|null $offer_price
 * @property int|null $payment_method_id
 * @property string|null $phone
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $asked_at
 * @property \Illuminate\Support\Carbon|null $schedule_date
 * @property string|null $distance
 * @property \Illuminate\Support\Carbon|null $start_trip
 * @property \Illuminate\Support\Carbon|null $end_trip
 * @property string|null $arrival_Expected_time
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CarType|null $carType
 * @property-read \App\Models\Client|null $client
 * @property-read \App\Models\Coupon|null $coupon
 * @property-read \App\Models\Delivery|null $delivery
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DeliveryRejectReasons[] $deliveryRejectReasons
 * @property-read int|null $delivery_reject_reasons_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $doctorsAndNurses
 * @property-read int|null $doctors_and_nurses_count
 * @property-read \App\Models\Address|null $endAddress
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $eventDeliveries
 * @property-read int|null $event_deliveries_count
 * @property-read mixed $client_status_text
 * @property-read mixed $expected_time_text
 * @property-read mixed $provider_status_text
 * @property-read mixed $real_time
 * @property-read mixed $real_time_text
 * @property-read mixed $type
 * @property-read \App\Models\Hospital|null $hospital
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $hospitalDoctors
 * @property-read int|null $hospital_doctors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $hospitalNurses
 * @property-read int|null $hospital_nurses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $hospitals
 * @property-read int|null $hospitals_count
 * @property-read \App\Models\OrderMeta|null $orderMeta
 * @property-read \App\Models\Patient|null $patient
 * @property-read \App\Models\PaymentMethod|null $paymentMethod
 * @property-read \App\Models\Pharmacy|null $pharmacy
 * @property-read \App\Models\Attachment|null $photo
 * @property-read \App\Models\PointsTransaction|null $pointsTransaction
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $requestEventDeliveries
 * @property-read int|null $request_event_deliveries_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $requestHospitalDoctors
 * @property-read int|null $request_hospital_doctors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $requestHospitalNurses
 * @property-read int|null $request_hospital_nurses_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $requestHospitals
 * @property-read int|null $request_hospitals_count
 * @property-read \App\Models\Review|null $review
 * @property-read \App\Models\Service|null $service
 * @property-read \App\Models\Address|null $startAddress
 * @property-read \App\Models\WalletTransaction|null $walletTransaction
 * @method static \Illuminate\Database\Eloquent\Builder|Order canUpdateStatus()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereArrivalExpectedTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAskedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCarTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCouponId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDistance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEndAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEndPriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEndTrip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereHospitalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePharmacyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereRealPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereRemainingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereScheduleDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStartAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStartPriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStartTrip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderMeta
 *
 * @property int $id
 * @property int $order_id
 * @property int|null $state_id
 * @property int|null $state_id_arrival
 * @property int|null $city_id
 * @property int|null $city_id_arrival
 * @property int|null $region_id
 * @property int|null $region_id_arrival
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereCityIdArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereRegionIdArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereStateIdArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderMeta whereUpdatedAt($value)
 */
	class OrderMeta extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderProduct
 *
 * @property int $id
 * @property int $product_id
 * @property string $lab_id
 * @property float $price
 * @property float $total_price
 * @property float $offer_price
 * @property int $quantity
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \App\Models\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereLabId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereOfferPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OrderProduct whereUpdatedAt($value)
 */
	class OrderProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string|null $image
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PageMeta[] $pageMeta
 * @property-read int|null $page_meta_count
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PageMeta
 *
 * @property int $id
 * @property int $page_id
 * @property string $meta_key
 * @property string|null $meta_value
 * @property string|null $meta_image
 * @property string|null $meta_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Page $page
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta query()
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta whereMetaImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta whereMetaKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta whereMetaType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta whereMetaValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageMeta whereUpdatedAt($value)
 */
	class PageMeta extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Patient
 *
 * @property int $id
 * @property int $order_id
 * @property string|null $type
 * @property string|null $facility_name
 * @property string|null $name
 * @property string|null $dead_name
 * @property string|null $national_id
 * @property string|null $dead_national_id
 * @property string|null $diseases
 * @property string|null $clinic_status
 * @property int|null $length
 * @property int|null $weight
 * @property int|null $blood_type_id
 * @property int|null $floor
 * @property string|null $elevator
 * @property int|null $cases_num
 * @property string|null $notes
 * @property string|null $insurance_number
 * @property \Illuminate\Support\Carbon|null $death_date
 * @property int|null $burial_permit_number
 * @property string|null $relative_relation
 * @property string|null $event_type
 * @property int|null $cars_number
 * @property \Illuminate\Support\Carbon|null $event_start_date
 * @property \Illuminate\Support\Carbon|null $event_end_date
 * @property int|null $days_number
 * @property int|null $nurses
 * @property int|null $doctors
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\BloodType|null $bloodType
 * @property-read \App\Models\Order $order
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBloodTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereBurialPermitNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCarsNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCasesNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereClinicStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDaysNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDeadName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDeadNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDeathDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDiseases($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereDoctors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereElevator($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEventEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEventStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFacilityName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereInsuranceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNationalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNurses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereRelativeRelation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereWeight($value)
 */
	class Patient extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PaymentMethod
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read mixed $name_text
 * @property-read \App\Models\Attachment|null $photo
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod query()
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PaymentMethod whereUpdatedAt($value)
 */
	class PaymentMethod extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pharmacy
 *
 * @property int $id
 * @property int $region_id
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string $name
 * @property string $owner_name
 * @property string|null $phone
 * @property string|null $email
 * @property string $status
 * @property string $delivery_type
 * @property float|null $delivery_cost
 * @property int|null $delivery_start_time
 * @property int|null $delivery_end_time
 * @property int $rate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attachment[] $attachments
 * @property-read int|null $attachments_count
 * @property-read mixed $case
 * @property-read mixed $cover
 * @property-read int|null $orders_count
 * @property-read mixed $photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\MedicalOrder[] $medicalOrders
 * @property-read int|null $medical_orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Medicine[] $medicines
 * @property-read int|null $medicines_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read \App\Models\Region $region
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Review[] $reviews
 * @property-read int|null $reviews_count
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy checkArea($points)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereDeliveryEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereDeliveryStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereDeliveryType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereOwnerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereRegionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pharmacy whereUpdatedAt($value)
 */
	class Pharmacy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PointsTransaction
 *
 * @property int $id
 * @property int $pointable_id
 * @property string $pointable_type
 * @property int|null $order_id
 * @property int $points_before
 * @property int $quantity
 * @property int $points_after
 * @property float $factor
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order|null $order
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $pointable
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction whereFactor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction wherePointableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction wherePointableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction wherePointsAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction wherePointsBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PointsTransaction whereUpdatedAt($value)
 */
	class PointsTransaction extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $title
 * @property string|null $slug
 * @property string $short_description
 * @property string $long_description
 * @property int $is_active
 * @property int|null $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attachment|null $attachment
 * @property-read mixed $photo
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Region
 *
 * @property int $id
 * @property string $name
 * @property float|null $shipping
 * @property int $is_shipping
 * @property int $city_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\City $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $deliveries
 * @property-read int|null $deliveries_count
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereIsShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereUpdatedAt($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RejectOrderReason
 *
 * @property int $id
 * @property string $name
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $deliveryRejectReasons
 * @property-read int|null $delivery_reject_reasons_count
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason query()
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RejectOrderReason whereUpdatedAt($value)
 */
	class RejectOrderReason extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Reservation
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property int $client_id
 * @property string $event_type
 * @property int $cars_num
 * @property string $event_from
 * @property string $event_to
 * @property string $time_from
 * @property string $time_to
 * @property int $days_num
 * @property int $doctors_num
 * @property int $nursing_num
 * @property string $price
 * @property string $notes
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCarsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereDaysNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereDoctorsNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereEventFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereEventTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereEventType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereNursingNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereTimeFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereTimeTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUpdatedAt($value)
 */
	class Reservation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Review
 *
 * @property int $id
 * @property int|null $order_id
 * @property int $client_id
 * @property int $rate
 * @property string $comment
 * @property string $reviewable_type
 * @property int $reviewable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client $client
 * @property-read \App\Models\Order|null $order
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $reviewable
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereReviewableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereReviewableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUpdatedAt($value)
 */
	class Review extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $service_type
 * @property string|null $category_id
 * @property int $level
 * @property int|null $time
 * @property int $is_active
 * @property int $is_open
 * @property string|null $cost_range
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attachment|null $attachment
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Country[] $countries
 * @property-read int|null $countries_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $deliveries
 * @property-read int|null $deliveries_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\EmergencyNumber[] $emergency_numbers
 * @property-read int|null $emergency_numbers_count
 * @property-read mixed $facility_title
 * @property-read mixed $photo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Hospital[] $hospitals
 * @property-read int|null $hospitals_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Pharmacy[] $pharmacies
 * @property-read int|null $pharmacies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Delivery[] $workingAmbulances
 * @property-read int|null $working_ambulances_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service checkActive()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCostRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIsOpen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Setting
 *
 * @property int $id
 * @property int $settings_category_id
 * @property string $key
 * @property string $value
 * @property string $display_name
 * @property int|null $level
 * @property string $data_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SettingsCategory $category
 * @property-read mixed $path
 * @property-read mixed $public_path
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Attachment|null $photo
 * @property-read \App\Models\Validation|null $validation
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDataType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSettingsCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereValue($value)
 */
	class Setting extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SettingsCategory
 *
 * @property int $id
 * @property string $name
 * @property int|null $level
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting[] $settings
 * @property-read int|null $settings_count
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SettingsCategory whereUpdatedAt($value)
 */
	class SettingsCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shift
 *
 * @property int $id
 * @property string $day
 * @property string $start
 * @property string $end
 * @property int $medical_times
 * @property string $shiftable_type
 * @property int $shiftable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $day_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $shiftable
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shift newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereMedicalTimes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereShiftableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereShiftableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shift whereUpdatedAt($value)
 */
	class Shift extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SiteModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 */
	class SiteModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Slider
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $image
 * @property int $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $slider_category_id
 * @property int|null $order
 * @property-read \App\Models\SliderCategory|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \App\Models\Attachment|null $photo
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereSliderCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SliderCategory
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property int|null $order
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slider[] $sliders
 * @property-read int|null $sliders_count
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SliderCategory whereUpdatedAt($value)
 */
	class SliderCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Specialty
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attachment|null $attachment
 * @property-read mixed $photo
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty query()
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specialty whereUpdatedAt($value)
 */
	class Specialty extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @property int $id
 * @property string $name
 * @property float|null $shipping
 * @property int $is_shipping
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel active($active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel feature($feature = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel finish($finish = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isActive($is_active = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel isShipping($is_shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel max($max = 0)
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofType($type = 'client')
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel ofTypeArray($type)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel offer($offer = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel sale($sale = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteModel shipping($shipping = 1)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereIsShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereShipping($value)
 * @method static \Illuminate\Database\Eloquent\Builder|State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Token
 *
 * @property int $id
 * @property string $token
 * @property string $os
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $tokenable_id
 * @property string $tokenable_type
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $tokenable
 * @method static \Illuminate\Database\Eloquent\Builder|Token checkType($relation)
 * @method static \Illuminate\Database\Eloquent\Builder|Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Token newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Token query()
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereTokenableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereTokenableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Token whereUpdatedAt($value)
 */
	class Token extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Validation
 *
 * @property int $id
 * @property int $setting_id
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Setting $setting
 * @method static \Illuminate\Database\Eloquent\Builder|Validation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Validation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Validation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Validation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Validation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Validation whereSettingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Validation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Validation whereValue($value)
 */
	class Validation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Visit
 *
 * @property int $id
 * @property int|null $client_id
 * @property int|null $doctor_id
 * @property string $status
 * @property string|null $description
 * @property string|null $reason
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Client|null $client
 * @property-read mixed $client_status_text
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Log[] $logs
 * @property-read int|null $logs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visit whereUpdatedAt($value)
 */
	class Visit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WalletTransaction
 *
 * @property int $id
 * @property string $walletable_type
 * @property int $walletable_id
 * @property int|null $order_id
 * @property float $balance_before
 * @property float $amount
 * @property float $balance_after
 * @property string $action
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order|null $order
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $walletable
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereBalanceAfter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereBalanceBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereWalletableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WalletTransaction whereWalletableType($value)
 */
	class WalletTransaction extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_active
 * @property-read mixed $roles_list
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Notification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

