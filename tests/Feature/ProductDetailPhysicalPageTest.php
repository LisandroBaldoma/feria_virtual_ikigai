<?php

test('renders the physical product detail React preview', function () {
    $response = $this->get(route('product-detail-fisico-react'));

    $response->assertSee('product-detail-fisico');
});
