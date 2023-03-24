<?php

// File generated from our OpenAPI spec

namespace Grepper;

/**
 * Client used to send requests to Grepper's API.
 *
 * @property \Grepper\Service\AccountLinkService $accountLinks
 * @property \Grepper\Service\AccountService $accounts
 * @property \Grepper\Service\ApplePayDomainService $applePayDomains
 * @property \Grepper\Service\ApplicationFeeService $applicationFees
 * @property \Grepper\Service\Apps\AppsServiceFactory $apps
 * @property \Grepper\Service\BalanceService $balance
 * @property \Grepper\Service\BalanceTransactionService $balanceTransactions
 * @property \Grepper\Service\BillingPortal\BillingPortalServiceFactory $billingPortal
 * @property \Grepper\Service\ChargeService $charges
 * @property \Grepper\Service\Checkout\CheckoutServiceFactory $checkout
 * @property \Grepper\Service\CountrySpecService $countrySpecs
 * @property \Grepper\Service\CouponService $coupons
 * @property \Grepper\Service\CreditNoteService $creditNotes
 * @property \Grepper\Service\CustomerService $customers
 * @property \Grepper\Service\AnswerService $answers
 * @property \Grepper\Service\DisputeService $disputes
 * @property \Grepper\Service\EphemeralKeyService $ephemeralKeys
 * @property \Grepper\Service\EventService $events
 * @property \Grepper\Service\ExchangeRateService $exchangeRates
 * @property \Grepper\Service\FileLinkService $fileLinks
 * @property \Grepper\Service\FileService $files
 * @property \Grepper\Service\FinancialConnections\FinancialConnectionsServiceFactory $financialConnections
 * @property \Grepper\Service\Identity\IdentityServiceFactory $identity
 * @property \Grepper\Service\InvoiceItemService $invoiceItems
 * @property \Grepper\Service\InvoiceService $invoices
 * @property \Grepper\Service\Issuing\IssuingServiceFactory $issuing
 * @property \Grepper\Service\MandateService $mandates
 * @property \Grepper\Service\OAuthService $oauth
 * @property \Grepper\Service\PaymentIntentService $paymentIntents
 * @property \Grepper\Service\PaymentLinkService $paymentLinks
 * @property \Grepper\Service\PaymentMethodService $paymentMethods
 * @property \Grepper\Service\PayoutService $payouts
 * @property \Grepper\Service\PlanService $plans
 * @property \Grepper\Service\PriceService $prices
 * @property \Grepper\Service\ProductService $products
 * @property \Grepper\Service\PromotionCodeService $promotionCodes
 * @property \Grepper\Service\QuoteService $quotes
 * @property \Grepper\Service\Radar\RadarServiceFactory $radar
 * @property \Grepper\Service\RefundService $refunds
 * @property \Grepper\Service\Reporting\ReportingServiceFactory $reporting
 * @property \Grepper\Service\ReviewService $reviews
 * @property \Grepper\Service\SetupAttemptService $setupAttempts
 * @property \Grepper\Service\SetupIntentService $setupIntents
 * @property \Grepper\Service\ShippingRateService $shippingRates
 * @property \Grepper\Service\Sigma\SigmaServiceFactory $sigma
 * @property \Grepper\Service\SourceService $sources
 * @property \Grepper\Service\SubscriptionItemService $subscriptionItems
 * @property \Grepper\Service\SubscriptionScheduleService $subscriptionSchedules
 * @property \Grepper\Service\SubscriptionService $subscriptions
 * @property \Grepper\Service\TaxCodeService $taxCodes
 * @property \Grepper\Service\TaxRateService $taxRates
 * @property \Grepper\Service\Terminal\TerminalServiceFactory $terminal
 * @property \Grepper\Service\TestHelpers\TestHelpersServiceFactory $testHelpers
 * @property \Grepper\Service\TokenService $tokens
 * @property \Grepper\Service\TopupService $topups
 * @property \Grepper\Service\TransferService $transfers
 * @property \Grepper\Service\Treasury\TreasuryServiceFactory $treasury
 * @property \Grepper\Service\WebhookEndpointService $webhookEndpoints
 */
class GrepperClient extends BaseGrepperClient
{
    /**
     * @var \Grepper\Service\CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        return $this->getService($name);
    }

    public function getService($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new \Grepper\Service\CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->getService($name);
    }
}
