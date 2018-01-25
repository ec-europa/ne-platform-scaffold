# NextEuropa Platform Scaffolding

Composer plugin that allows to download a specific version of the [NextEuropa platform](https://github.com/ec-europa/platform-dev),
for development purposes only.

## Configuration

Require the project as a development dependency, as in:

```json
  "require-dev": {
    "ec-europa/ne-platform-scaffold": "dev-master"
  }
```

Include the following configuration in your `composer.json`:

```
  "extra": {
    "ne-platform-scaffold": {
      "version": "2.3.78",
      "directories": {
        "build": "build"
      },
      "artifact": {
        "url": "https://github.com/ec-europa/platform-dev/releases/download/{version}/platform-dev-{version}.tar.gz"
      },
      "patches": {
        "My path description": "http://example.com/my.patch"
      }
    }
  }
```

Parameters in `ne-platform-scaffold` are explained below:  

- `version`: platform release tag to be downloaded.
- `directories.build`: build directory name, i.e. platform code will be available here.
- `artifact.url`: URL artifact pattern, defaults to GitHub location, `{version}` token will be replaced with value in `version`.
- `patches`: list of patches to be further applied to the platform, once it has been downloaded and extracted in `directories.build`. 

## Example

Below an example of using the NextEuropa Platform Scaffolding when developing a Drupal 7 module:

```
{
  "name": "ec-europa/my-module",
  "type": "drupal-module",
  "license": "EUPL-1.1",
  "minimum-stability": "dev",
  "prefer-stable": true,
  "require-dev": {
    "ec-europa/ne-platform-scaffold": "dev-master"
  },
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/ec-europa/ne-platform-scaffold.git"
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
  }
}
```
