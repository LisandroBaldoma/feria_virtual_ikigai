<?php

test('renders the digital product detail React preview', function () {
    $response = $this->get(route('product-detail-digital-react'));

    $response->assertSee('product-detail-digital');
});
