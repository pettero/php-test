.PHONY: test

test:
	./vendor/bin/phpunit --bootstrap vendor/autoload.php test
