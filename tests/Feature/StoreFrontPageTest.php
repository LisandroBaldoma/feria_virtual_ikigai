<?php

test('renders the store front React preview', function () {
    $response = $this->get(route('store-front-react'));

    $response->assertSee('store-front');
});
