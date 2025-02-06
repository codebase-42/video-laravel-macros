<?php

test('that true is true and false is false', function () {
    expect(true)->toBeTrue()->and(false)->toBeFalse();
});
