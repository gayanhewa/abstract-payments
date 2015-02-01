# Abstract Payments

## Concept

The concept is to identify and abstract a common contract that will be easy to use regardless of the client.

A common scenario can be as below :

    <?php 
      interface abstractPayment 
      {
      
        public function pay($amount);
        
      }
    
    
      class StripeClient implements abstractPayment
      {
      
        public function pay($amount) 
        {
          // Consume the Stripe php client and implement the functionality.
        }
        
      }
      
      class BraintreeClient implements abstractPayment
      {
      
        public function pay($amount)
        {
          // Consume the Braintree php client and implement the functionality
        }
        
      }
        
      class AbcBankClient implements abstractPayment
      {
      
        public function pay($amount)
        {
          // Consume the Abc Bank API to implement the functionality
        }
      
      }

### Why does this matter ?

The advantage of such an abstrction is quite straight forwards. Assume that we have an application that consumes Stripe payments. Down the line we decide to replace this gateway with something else. This would result in modification of the existing codebase. But with a this approach we can simply swap the implementation to be used by a [DI](http://php-di.org/) container. Not necessarily the one linked , but could be anything.

### TODO 
1. Identify the abstrat layer for payments.
2. Initial set of clients to integrate.

- Stripe
- Braintree
- Balanced Payments
