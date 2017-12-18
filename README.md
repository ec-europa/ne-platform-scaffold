# NextEuropa Platform Scaffolding

```
  "extra": {
    "ne-platform-scaffold": {
      "version": "2.3.78",
      "patches": {
        "patch description": "patch URL"
      }
    }
  }
```

# Example of the composer.json
```
{
  "name": "ec-europa/target",
  "type": "drupal-module",
  "license": "EUPL-1.1",
  "minimum-stability": "dev",
  "prefer-stable": true,
  "require": {
    "php": ">=5.6"
  },
  "require-dev": {
    "ec-europa/ne-platform-scaffold": "*"
  },
  "repositories": [
    {
      "type": "path",
      "url": "../ne-platform-scaffold"
    }
  ],
  "extra": {
    "ne-platform-scaffold": {
      "version": "2.3.78"
    }
  },
  "scripts": {
    "grumphp": "./vendor/bin/grumphp run"
  }
}
```
