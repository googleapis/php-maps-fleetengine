<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/maps/fleetengine/v1/vehicle_api.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Maps\FleetEngine\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Maps\FleetEngine\V1\CreateVehicleRequest;
use Google\Maps\FleetEngine\V1\DeleteVehicleRequest;
use Google\Maps\FleetEngine\V1\GetVehicleRequest;
use Google\Maps\FleetEngine\V1\ListVehiclesRequest;
use Google\Maps\FleetEngine\V1\SearchVehiclesRequest;
use Google\Maps\FleetEngine\V1\SearchVehiclesResponse;
use Google\Maps\FleetEngine\V1\UpdateVehicleAttributesRequest;
use Google\Maps\FleetEngine\V1\UpdateVehicleAttributesResponse;
use Google\Maps\FleetEngine\V1\UpdateVehicleRequest;
use Google\Maps\FleetEngine\V1\Vehicle;
use Google\Maps\FleetEngine\V1\Vehicle\VehicleType;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;

/**
 * Service Description: Vehicle management service.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface<Vehicle> createVehicleAsync(CreateVehicleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<void> deleteVehicleAsync(DeleteVehicleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Vehicle> getVehicleAsync(GetVehicleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<PagedListResponse> listVehiclesAsync(ListVehiclesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<SearchVehiclesResponse> searchVehiclesAsync(SearchVehiclesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<Vehicle> updateVehicleAsync(UpdateVehicleRequest $request, array $optionalArgs = [])
 * @method PromiseInterface<UpdateVehicleAttributesResponse> updateVehicleAttributesAsync(UpdateVehicleAttributesRequest $request, array $optionalArgs = [])
 */
final class VehicleServiceClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'maps.fleetengine.v1.VehicleService';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'fleetengine.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'fleetengine.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = ['https://www.googleapis.com/auth/cloud-platform'];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/vehicle_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/vehicle_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/vehicle_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/vehicle_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a vehicle
     * resource.
     *
     * @param string $provider
     * @param string $vehicle
     *
     * @return string The formatted vehicle resource.
     */
    public static function vehicleName(string $provider, string $vehicle): string
    {
        return self::getPathTemplate('vehicle')->render([
            'provider' => $provider,
            'vehicle' => $vehicle,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - vehicle: providers/{provider}/vehicles/{vehicle}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string  $formattedName The formatted name string
     * @param ?string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, ?string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'fleetengine.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *           *Important*: If you accept a credential configuration (credential
     *           JSON/File/Stream) from an external source for authentication to Google Cloud
     *           Platform, you must validate it before providing it to any Google API or library.
     *           Providing an unvalidated credential configuration to Google APIs can compromise
     *           the security of your systems and data. For more information {@see
     *           https://cloud.google.com/docs/authentication/external/externally-sourced-credentials}
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     *     @type false|LoggerInterface $logger
     *           A PSR-3 compliant logger. If set to false, logging is disabled, ignoring the
     *           'GOOGLE_SDK_PHP_LOGGING' environment flag
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Instantiates a new vehicle associated with an on-demand rideshare or
     * deliveries provider. Each `Vehicle` must have a unique vehicle ID.
     *
     * The following `Vehicle` fields are required when creating a `Vehicle`:
     *
     * * `vehicleState`
     * * `supportedTripTypes`
     * * `maximumCapacity`
     * * `vehicleType`
     *
     * The following `Vehicle` fields are ignored when creating a `Vehicle`:
     *
     * * `name`
     * * `currentTrips`
     * * `availableCapacity`
     * * `current_route_segment`
     * * `current_route_segment_end_point`
     * * `current_route_segment_version`
     * * `current_route_segment_traffic`
     * * `route`
     * * `waypoints`
     * * `waypoints_version`
     * * `remaining_distance_meters`
     * * `remaining_time_seconds`
     * * `eta_to_next_waypoint`
     * * `navigation_status`
     *
     * All other fields are optional and used if provided.
     *
     * The async variant is {@see VehicleServiceClient::createVehicleAsync()} .
     *
     * @example samples/V1/VehicleServiceClient/create_vehicle.php
     *
     * @param CreateVehicleRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Vehicle
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createVehicle(CreateVehicleRequest $request, array $callOptions = []): Vehicle
    {
        return $this->startApiCall('CreateVehicle', $request, $callOptions)->wait();
    }

    /**
     * Deletes a Vehicle from the Fleet Engine.
     *
     * Returns FAILED_PRECONDITION if the Vehicle has active Trips.
     * assigned to it.
     *
     * The async variant is {@see VehicleServiceClient::deleteVehicleAsync()} .
     *
     * @example samples/V1/VehicleServiceClient/delete_vehicle.php
     *
     * @param DeleteVehicleRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteVehicle(DeleteVehicleRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteVehicle', $request, $callOptions)->wait();
    }

    /**
     * Returns a vehicle from the Fleet Engine.
     *
     * The async variant is {@see VehicleServiceClient::getVehicleAsync()} .
     *
     * @example samples/V1/VehicleServiceClient/get_vehicle.php
     *
     * @param GetVehicleRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Vehicle
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getVehicle(GetVehicleRequest $request, array $callOptions = []): Vehicle
    {
        return $this->startApiCall('GetVehicle', $request, $callOptions)->wait();
    }

    /**
     * Returns a paginated list of vehicles associated with
     * a provider that match the request options.
     *
     * The async variant is {@see VehicleServiceClient::listVehiclesAsync()} .
     *
     * @example samples/V1/VehicleServiceClient/list_vehicles.php
     *
     * @param ListVehiclesRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listVehicles(ListVehiclesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListVehicles', $request, $callOptions);
    }

    /**
     * Returns a list of vehicles that match the request options.
     *
     * The async variant is {@see VehicleServiceClient::searchVehiclesAsync()} .
     *
     * @example samples/V1/VehicleServiceClient/search_vehicles.php
     *
     * @param SearchVehiclesRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SearchVehiclesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function searchVehicles(SearchVehiclesRequest $request, array $callOptions = []): SearchVehiclesResponse
    {
        return $this->startApiCall('SearchVehicles', $request, $callOptions)->wait();
    }

    /**
     * Writes updated vehicle data to the Fleet Engine.
     *
     * When updating a `Vehicle`, the following fields cannot be updated since
     * they are managed by the server:
     *
     * * `currentTrips`
     * * `availableCapacity`
     * * `current_route_segment_version`
     * * `waypoints_version`
     *
     * The vehicle `name` also cannot be updated.
     *
     * If the `attributes` field is updated, **all** the vehicle's attributes are
     * replaced with the attributes provided in the request. If you want to update
     * only some attributes, see the `UpdateVehicleAttributes` method. Likewise,
     * the `waypoints` field can be updated, but must contain all the waypoints
     * currently on the vehicle, and no other waypoints.
     *
     * The async variant is {@see VehicleServiceClient::updateVehicleAsync()} .
     *
     * @example samples/V1/VehicleServiceClient/update_vehicle.php
     *
     * @param UpdateVehicleRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Vehicle
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateVehicle(UpdateVehicleRequest $request, array $callOptions = []): Vehicle
    {
        return $this->startApiCall('UpdateVehicle', $request, $callOptions)->wait();
    }

    /**
     * Partially updates a vehicle's attributes.
     * Only the attributes mentioned in the request will be updated, other
     * attributes will NOT be altered. Note: this is different in `UpdateVehicle`,
     * where the whole `attributes` field will be replaced by the one in
     * `UpdateVehicleRequest`, attributes not in the request would be removed.
     *
     * The async variant is {@see VehicleServiceClient::updateVehicleAttributesAsync()}
     * .
     *
     * @example samples/V1/VehicleServiceClient/update_vehicle_attributes.php
     *
     * @param UpdateVehicleAttributesRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return UpdateVehicleAttributesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateVehicleAttributes(
        UpdateVehicleAttributesRequest $request,
        array $callOptions = []
    ): UpdateVehicleAttributesResponse {
        return $this->startApiCall('UpdateVehicleAttributes', $request, $callOptions)->wait();
    }
}
