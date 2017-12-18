# NextEuropa Platform Scaffolding

The solution for scaffolding the platform is provided as the custom composer
install plugin.
Beneath you can find an extra part that needs to be included in order to setup
some of the plugin properties.

For the moment you can specify following properties:
  - **version:** a tag of a release that you want to scaffold
  - **directories: build:** a name of the directory with the build
  - **artifact: url:** a default URL pattern of the artifact file
  - **patches:** you can specify the remote patches that should be applied

```
  "extra": {
    "ne-platform-scaffold": {
      "version": "release tag",
      "directories": {
        "build": "build directory name"
      },
      "artifact": {
        "url": "https://github.com/ec-europa/platform-dev/releases/download/{version}/platform-dev-{version}.tar.gz"
      },
      "patches": {
        "remote patch description": "the patch URL"
      }
    }
  }
```

# Example of the composer.json
In order to present the use case of the scaffolding plugin in the project
you can investigate the structure of the composer.json file attached below.

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
      "version": "2.3.78",
      "directories": {
        "build": "build"
      },
      "artifact": {
        "url": "https://github.com/ec-europa/platform-dev/releases/download/{version}/platform-dev-{version}.tar.gz"
      }
    }
  },
  "scripts": {
    "grumphp": "./vendor/bin/grumphp run"
  }
}
```
