<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicles.proto

namespace GPBMetadata\Google\Maps\Fleetengine\V1;

class Vehicles
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Maps\Fleetengine\V1\Fleetengine::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/maps/fleetengine/v1/vehicles.protomaps.fleetengine.v1google/api/resource.proto,google/maps/fleetengine/v1/fleetengine.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
Vehicle
name (	B�A8
vehicle_state (2!.maps.fleetengine.v1.VehicleState;
supported_trip_types (2.maps.fleetengine.v1.TripType
current_trips (	B�A;
last_location (2$.maps.fleetengine.v1.VehicleLocationA
past_locations (2$.maps.fleetengine.v1.VehicleLocationB�A
maximum_capacity (9

attributes (2%.maps.fleetengine.v1.VehicleAttributeC
vehicle_type	 (2(.maps.fleetengine.v1.Vehicle.VehicleTypeB�A8
license_plate
 (2!.maps.fleetengine.v1.LicensePlate8
route (2%.maps.fleetengine.v1.TerminalLocationB
current_route_segment (	T
current_route_segment_traffic (2(.maps.fleetengine.v1.TrafficPolylineDataB�AF
current_route_segment_version (2.google.protobuf.TimestampB�AJ
current_route_segment_end_point (2!.maps.fleetengine.v1.TripWaypoint>
remaining_distance_meters (2.google.protobuf.Int32Value9
eta_to_first_waypoint (2.google.protobuf.Timestamp@
remaining_time_seconds (2.google.protobuf.Int32ValueB�A4
	waypoints (2!.maps.fleetengine.v1.TripWaypoint:
waypoints_version (2.google.protobuf.TimestampB�A
back_to_back_enabled (@
navigation_status (2%.maps.fleetengine.v1.NavigationStatusA
device_settings (2#.maps.fleetengine.v1.DeviceSettingsB�A�
VehicleTypeC
category (21.maps.fleetengine.v1.Vehicle.VehicleType.Category"d
Category
UNKNOWN 
AUTO
TAXI	
TRUCK
TWO_WHEELER
BICYCLE

PEDESTRIAN:P�AM
"fleetengine.googleapis.com/Vehicle\'providers/{provider}/vehicles/{vehicle}"�
BatteryInfo:
battery_status (2".maps.fleetengine.v1.BatteryStatus6
power_source (2 .maps.fleetengine.v1.PowerSource
battery_percentage ("�
DeviceSettingsL
location_power_save_mode (2*.maps.fleetengine.v1.LocationPowerSaveMode
is_power_save_mode (
is_interactive (6
battery_info (2 .maps.fleetengine.v1.BatteryInfo"A
LicensePlate
country_code (	B�A
last_character (	"�
$VisualTrafficReportPolylineRendering`
road_stretch (2E.maps.fleetengine.v1.VisualTrafficReportPolylineRendering.RoadStretchB�A�
RoadStretch_
style (2K.maps.fleetengine.v1.VisualTrafficReportPolylineRendering.RoadStretch.StyleB�A
offset_meters (B�A
length_meters (B�A"C
Style
STYLE_UNSPECIFIED 
SLOWER_TRAFFIC
TRAFFIC_JAM"k
TrafficPolylineDataT
traffic_rendering (29.maps.fleetengine.v1.VisualTrafficReportPolylineRendering*B
VehicleState
UNKNOWN_VEHICLE_STATE 
OFFLINE

ONLINE*�
LocationPowerSaveMode$
 UNKNOWN_LOCATION_POWER_SAVE_MODE 
LOCATION_MODE_NO_CHANGE.
*LOCATION_MODE_GPS_DISABLED_WHEN_SCREEN_OFF.
*LOCATION_MODE_ALL_DISABLED_WHEN_SCREEN_OFF!
LOCATION_MODE_FOREGROUND_ONLY3
/LOCATION_MODE_THROTTLE_REQUESTS_WHEN_SCREEN_OFF*�
BatteryStatus
UNKNOWN_BATTERY_STATUS 
BATTERY_STATUS_CHARGING
BATTERY_STATUS_DISCHARGING
BATTERY_STATUS_FULL
BATTERY_STATUS_NOT_CHARGING
BATTERY_STATUS_POWER_LOW*�
PowerSource
UNKNOWN_POWER_SOURCE 
POWER_SOURCE_AC
POWER_SOURCE_USB
POWER_SOURCE_WIRELESS
POWER_SOURCE_UNPLUGGEDB�
com.google.maps.fleetengine.v1BVehiclesPZFcloud.google.com/go/maps/fleetengine/apiv1/fleetenginepb;fleetenginepb�CFE�Google.Maps.FleetEngine.V1�Google\\Maps\\FleetEngine\\V1�Google::Maps::FleetEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

