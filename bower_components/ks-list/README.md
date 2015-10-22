The ks-list library
=======

This library has a dependency on the [ks-core lib](https://github.com/ks-frontend/ks-core).

This library is mostly a normalize for lists which ever the type of list. Plugins should extend from it to build themes.

The following is a few type of list it can handle:

---
    <ul class="list">
        <li></li>
    </ul>

    <ol class="list">
        <li></li>
    </ol>
---

You can define if the list should be block type or inline by adding the class inline or block.
---
    <div class="list inline">
        <div></div>
    </div>

    <div class="list block">
        <span></span>
    </div>
---

# Installation with bower

```console
$ bower install ks-list
```

[![Bower version](https://badge.fury.io/bo/ks-lsit.svg)](http://badge.fury.io/bo/ks-list)

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)
