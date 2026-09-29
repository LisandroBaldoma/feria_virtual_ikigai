<?php

test('renders the stores React preview', function () {
    $response = $this->get(route('tiendas-stores-react'));

    $response->assertSee('tiendas-stores');
});
