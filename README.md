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


### TODO 

Initial set of clients to integrate.

- Stripe
- Braintree
- Balanced Payments
