<?php

// Naming conventions for class names and class files : Capitalize (more readable) 

class Cart {

  public $nbProducts;

  public function addProduct(): string
  {
    return "Product successfully added to cart";
  }

  protected function removeProduct(): string
  {
    return "Product successfully removed from cart";
  }

  private function displayProducts(): string
  {
    return "List of products";
  }

}