Pico Menu Sort
==============

By default pico sorts menu items alphabetically, this plugin allows the you to
specify a 'weight' for menu sorting, items are sorted low to high.

Installation
------------

1. Copy `pico_menu_sort.php` into the plugins folder.
2. Add `Weight` to any pages you would like sorted by weight in the menu.

### Sample

index.md

```
/*
  Title: Home
  Robot: index,nofollow
  Author: Luke Bainbridge
  Weight: 0
*/
```

after.md

```
/*
  Title: After Home
  Robot: index,nofollow
  Author: Luke Bainbridge
  Weight: 1
*/
```

License
-------

### Released under the MIT license.

Copyright (c) <year> <copyright holders>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
