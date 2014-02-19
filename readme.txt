Komodo Edit is a free text-editor specifically designed for writing program code, and it makes an OK document editor also.  It has many command-shortcut-keybindings that allow you to press specific keystrokes to activate internal commands.  It also allows the user to create "macros" and "snippets," commands and strings of characters that can also be "bound" to a keystroke of the user's choice.  If you want to create your macros and snippets, you need to bind them to keystrokes that are not in conflict with Komodo's command-keybindings.  Komodo Edit will list the keybindings, but only by category.  It is much easier to keep track of where there is an unbound keystroke available if they are listed by key.

This PHP program will convert Komodo's "keybindings by category" HTML-output-dump-pagefile into an HTML page listing "keybindings by key".  It will highlight keybindings that conflict with each-other.  It can also compare and contrast different keybinding schemes.
It can also include a "groomed" version of the original "keybindings by category" tables with the keys dressed nice to read them, again showing conflicting keys and comparing/contrasting different schemes.  When the groomed category tables are included, page display options include one full page, side-by-side, or top-over-bottom stacked.
There is also a navigation menu with quick-click to each key, and if included, category tables.

Once you process your key bindings list with this PHP program, save the output HTML from the browser to the file of your choice on your computer where you use Komodo Edit.  Then open the folder where you just saved the file, and open the file you just saved in another window of your browser.  This will give you a "file://" URL in your browser's address bar; copy it to the clipboard.   In Komodo Edit's right-side-toolbar, where snippets, macros, etc. are stored, right-click and Add > New URL.  Paste the URL into the URL field.  I like to bind it to Alt+F1 for quick access; or you can just click on it in the toolbar.

For more info, and further Komodo Edit support files (including the 339 Unicode international extended-character snippets listed in the demo files), see:

http://softmoon-webware.com/Komodo/

PS due to the filename restrictions that PHPClasses.org places on filenames, please rename the following file in the package:
Komodo_Keybindings_-Default-.htm
becomes:
Komodo Keybindings [Default].htm
This latter name with spaces is the default name that a browser such as Firefox will give the file when asked to "save the HTML source-file".
