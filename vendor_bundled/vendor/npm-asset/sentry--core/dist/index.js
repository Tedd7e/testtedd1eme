Object.defineProperty(exports, "__esModule", { value: true });
var minimal_1 = require("@sentry/minimal");
exports.addBreadcrumb = minimal_1.addBreadcrumb;
exports.captureException = minimal_1.captureException;
exports.captureEvent = minimal_1.captureEvent;
exports.captureMessage = minimal_1.captureMessage;
exports.configureScope = minimal_1.configureScope;
exports.startTransaction = minimal_1.startTransaction;
exports.setContext = minimal_1.setContext;
exports.setExtra = minimal_1.setExtra;
exports.setExtras = minimal_1.setExtras;
exports.setTag = minimal_1.setTag;
exports.setTags = minimal_1.setTags;
exports.setUser = minimal_1.setUser;
exports.withScope = minimal_1.withScope;
var hub_1 = require("@sentry/hub");
exports.addGlobalEventProcessor = hub_1.addGlobalEventProcessor;
exports.getCurrentHub = hub_1.getCurrentHub;
exports.getHubFromCarrier = hub_1.getHubFromCarrier;
exports.Hub = hub_1.Hub;
exports.makeMain = hub_1.makeMain;
exports.Scope = hub_1.Scope;
exports.Session = hub_1.Session;
var api_1 = require("./api");
// eslint-disable-next-line deprecation/deprecation
exports.API = api_1.API;
exports.getEnvelopeEndpointWithUrlEncodedAuth = api_1.getEnvelopeEndpointWithUrlEncodedAuth;
exports.getStoreEndpointWithUrlEncodedAuth = api_1.getStoreEndpointWithUrlEncodedAuth;
exports.getRequestHeaders = api_1.getRequestHeaders;
exports.initAPIDetails = api_1.initAPIDetails;
exports.getReportDialogEndpoint = api_1.getReportDialogEndpoint;
var baseclient_1 = require("./baseclient");
exports.BaseClient = baseclient_1.BaseClient;
var basebackend_1 = require("./basebackend");
exports.BaseBackend = basebackend_1.BaseBackend;
var request_1 = require("./request");
exports.eventToSentryRequest = request_1.eventToSentryRequest;
exports.sessionToSentryRequest = request_1.sessionToSentryRequest;
var sdk_1 = require("./sdk");
exports.initAndBind = sdk_1.initAndBind;
var noop_1 = require("./transports/noop");
exports.NoopTransport = noop_1.NoopTransport;
var base_1 = require("./transports/base");
exports.createTransport = base_1.createTransport;
var version_1 = require("./version");
exports.SDK_VERSION = version_1.SDK_VERSION;
var Integrations = require("./integrations");
exports.Integrations = Integrations;
//# sourceMappingURL=index.js.map