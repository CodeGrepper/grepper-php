<?php

// File generated from our OpenAPI spec

namespace Grepper\Service;

class AnswerService extends \Grepper\Service\AbstractService
{
    /**
     * Returns a list of your customers. The customers are returned sorted by creation
     * date, with the most recent customers appearing first.
     *
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection<\Grepper\Customer>
     */
    public function search($params = null, $opts = null)
    {
        echo "here";
        return $this->requestCollection('get', '/v1/answers/search', $params, $opts);
    }

    /**
     * Returns a list of your customers. The customers are returned sorted by creation
     * date, with the most recent customers appearing first.
     *
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection<\Grepper\Customer>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/customers', $params, $opts);
    }

    /**
     * Returns a list of transactions that updated the customer’s <a
     * href="/docs/billing/customer/balance">balances</a>.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection<\Grepper\CustomerBalanceTransaction>
     */
    public function allBalanceTransactions($parentId, $params = null, $opts = null)
    {
        return $this->requestCollection('get', $this->buildPath('/v1/customers/%s/balance_transactions', $parentId), $params, $opts);
    }

    /**
     * Returns a list of transactions that modified the customer’s <a
     * href="/docs/payments/customer-balance">cash balance</a>.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection<\Grepper\CustomerCashBalanceTransaction>
     */
    public function allCashBalanceTransactions($parentId, $params = null, $opts = null)
    {
        return $this->requestCollection('get', $this->buildPath('/v1/customers/%s/cash_balance_transactions', $parentId), $params, $opts);
    }

    /**
     * Returns a list of PaymentMethods for a given Customer.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection<\Grepper\PaymentMethod>
     */
    public function allPaymentMethods($id, $params = null, $opts = null)
    {
        return $this->requestCollection('get', $this->buildPath('/v1/customers/%s/payment_methods', $id), $params, $opts);
    }

    /**
     * List sources for a specified customer.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection<\Grepper\Account|\Grepper\BankAccount|\Grepper\Card|\Grepper\Source>
     */
    public function allSources($parentId, $params = null, $opts = null)
    {
        return $this->requestCollection('get', $this->buildPath('/v1/customers/%s/sources', $parentId), $params, $opts);
    }

    /**
     * Returns a list of tax IDs for a customer.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Collection<\Grepper\TaxId>
     */
    public function allTaxIds($parentId, $params = null, $opts = null)
    {
        return $this->requestCollection('get', $this->buildPath('/v1/customers/%s/tax_ids', $parentId), $params, $opts);
    }

    /**
     * Creates a new customer object.
     *
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Customer
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/customers', $params, $opts);
    }

    /**
     * Creates an immutable transaction that updates the customer’s credit <a
     * href="/docs/billing/customer/balance">balance</a>.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\CustomerBalanceTransaction
     */
    public function createBalanceTransaction($parentId, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/balance_transactions', $parentId), $params, $opts);
    }

    /**
     * Retrieve funding instructions for a customer cash balance. If funding
     * instructions do not yet exist for the customer, new funding instructions will be
     * created. If funding instructions have already been created for a given customer,
     * the same funding instructions will be retrieved. In other words, we will return
     * the same funding instructions each time.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\FundingInstructions
     */
    public function createFundingInstructions($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/funding_instructions', $id), $params, $opts);
    }

    /**
     * When you create a new credit card, you must specify a customer or recipient on
     * which to create it.
     *
     * If the card’s owner has no default card, then the new card will become the
     * default. However, if the owner already has a default, then it will not change.
     * To change the default, you should <a href="/docs/api#update_customer">update the
     * customer</a> to have a new <code>default_source</code>.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Account|\Grepper\BankAccount|\Grepper\Card|\Grepper\Source
     */
    public function createSource($parentId, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/sources', $parentId), $params, $opts);
    }

    /**
     * Creates a new <code>TaxID</code> object for a customer.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\TaxId
     */
    public function createTaxId($parentId, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/tax_ids', $parentId), $params, $opts);
    }

    /**
     * Permanently deletes a customer. It cannot be undone. Also immediately cancels
     * any active subscriptions on the customer.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Customer
     */
    public function delete($id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/customers/%s', $id), $params, $opts);
    }

    /**
     * Removes the currently applied discount on a customer.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Discount
     */
    public function deleteDiscount($id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/customers/%s/discount', $id), $params, $opts);
    }

    /**
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\BankAccount|\Grepper\Card|\Grepper\Source
     */
    public function deleteSource($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/customers/%s/sources/%s', $parentId, $id), $params, $opts);
    }

    /**
     * Deletes an existing <code>TaxID</code> object.
     *
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\TaxId
     */
    public function deleteTaxId($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/customers/%s/tax_ids/%s', $parentId, $id), $params, $opts);
    }

    /**
     * Retrieves a Customer object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Customer
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/customers/%s', $id), $params, $opts);
    }

    /**
     * Retrieves a specific customer balance transaction that updated the customer’s <a
     * href="/docs/billing/customer/balance">balances</a>.
     *
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\CustomerBalanceTransaction
     */
    public function retrieveBalanceTransaction($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/customers/%s/balance_transactions/%s', $parentId, $id), $params, $opts);
    }

    /**
     * Retrieves a customer’s cash balance.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\CashBalance
     */
    public function retrieveCashBalance($parentId, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/customers/%s/cash_balance', $parentId), $params, $opts);
    }

    /**
     * Retrieves a specific cash balance transaction, which updated the customer’s <a
     * href="/docs/payments/customer-balance">cash balance</a>.
     *
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\CustomerCashBalanceTransaction
     */
    public function retrieveCashBalanceTransaction($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/customers/%s/cash_balance_transactions/%s', $parentId, $id), $params, $opts);
    }

    /**
     * Retrieves a PaymentMethod object for a given Customer.
     *
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\PaymentMethod
     */
    public function retrievePaymentMethod($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/customers/%s/payment_methods/%s', $parentId, $id), $params, $opts);
    }

    /**
     * Retrieve a specified source for a given customer.
     *
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Account|\Grepper\BankAccount|\Grepper\Card|\Grepper\Source
     */
    public function retrieveSource($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/customers/%s/sources/%s', $parentId, $id), $params, $opts);
    }

    /**
     * Retrieves the <code>TaxID</code> object with the given identifier.
     *
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\TaxId
     */
    public function retrieveTaxId($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/customers/%s/tax_ids/%s', $parentId, $id), $params, $opts);
    }


    /**
     * Updates the specified customer by setting the values of the parameters passed.
     * Any parameters not provided will be left unchanged. For example, if you pass the
     * <strong>source</strong> parameter, that becomes the customer’s active source
     * (e.g., a card) to be used for all charges in the future. When you update a
     * customer to a new valid card source by passing the <strong>source</strong>
     * parameter: for each of the customer’s current subscriptions, if the subscription
     * bills automatically and is in the <code>past_due</code> state, then the latest
     * open invoice for the subscription with automatic collection enabled will be
     * retried. This retry will not count as an automatic retry, and will not affect
     * the next regularly scheduled payment for the invoice. Changing the
     * <strong>default_source</strong> for a customer will not trigger this behavior.
     *
     * This request accepts mostly the same arguments as the customer creation call.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\Customer
     */
    public function update($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s', $id), $params, $opts);
    }

    /**
     * Most credit balance transaction fields are immutable, but you may update its
     * <code>description</code> and <code>metadata</code>.
     *
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\CustomerBalanceTransaction
     */
    public function updateBalanceTransaction($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/balance_transactions/%s', $parentId, $id), $params, $opts);
    }

    /**
     * Changes the settings on a customer’s cash balance.
     *
     * @param string $parentId
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\CashBalance
     */
    public function updateCashBalance($parentId, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/cash_balance', $parentId), $params, $opts);
    }

    /**
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\BankAccount|\Grepper\Card|\Grepper\Source
     */
    public function updateSource($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/sources/%s', $parentId, $id), $params, $opts);
    }

    /**
     * @param string $parentId
     * @param string $id
     * @param null|array $params
     * @param null|array|\Grepper\Util\RequestOptions $opts
     *
     * @throws \Grepper\Exception\ApiErrorException if the request fails
     *
     * @return \Grepper\BankAccount|\Grepper\Card|\Grepper\Source
     */
    public function verifySource($parentId, $id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/customers/%s/sources/%s/verify', $parentId, $id), $params, $opts);
    }
}
