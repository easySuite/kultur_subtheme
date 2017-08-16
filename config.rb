require 'compass/import-once/activate'
require 'susy'
# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "css"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "javascripts"

# Set this to the root of your project. All resource locations above are
# considered to be relative to this path.
http_path = "/"


# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :expanded

# Pass options to sass. For development, we turn on the FireSass-compatible
# debug_info if the firesass config variable above is true.
sass_options =  {:debug_info => false}

# Ignore line comments when compiling, in order to avoid confusion.
line_comments = false
