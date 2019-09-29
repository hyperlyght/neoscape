Greetings, and welcome to my Neoscape demo slideshow project. Here is some information about the choices I made in its creation:

First off, the design. I wanted the imagery to be visually stimulating, so I used a mixture of my visionary abstract artwork (PNGs) and dynamic vectors (SVGs). These images are set against a black background for maximum contrast and no color conflict. Following suit, the pagination and navigation controls are mainly neutral colors to again maximize the pop of the imagery. The controls overlay the image for a seamless design.

In development I employed PHP to allow me to load the images and their titles dynamically from a JSON file. The pagination is linked to the number of images loaded via the JSON file, as is the navigation. SASS was used in the creation of the CSS file. I love working with SASS for the nesting aspect, as it makes the styles much easier to read. (SASS has a lot of other great features too, but I didn’t use them in this project.) I also included Normalize.css for maximum synchronicity over various browsers. 

I went with an approach that used CSS3’s native scrolling ability and scroll snap type to get the images to scroll horizontally. I used the “mandatory” scroll-snap-type and the "start" scroll-snap-align to get the images to lock position properly when scrolling from image to image. Flexbox holds the images together and is used to center the images in the viewport as well. 

Regarding future improvement, I would like to see the slideshow position itself better in landscape mode on a phone. As is the aspect ratio of the imagery doesn’t translate well to the aspect ratio of a phone, I would need to use Javascript to dynamically set CSS properties for the height and width there.
