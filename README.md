# Workshop materials

[Michal Rzeszewski](https://twitter.com/m_rzeszewski), Digital Geographer working @ [Adam Mickiewicz University](https://amu.edu.pl/en)

## I. Introduction

In this course You will learn how to design, compose, construct and publish an online map. We will be doing all this using Mapbox platform and we will start with the introduction to its web interface. In the next stages we will use Javascript library to extend our map with more advanced user interactions.

Let's start with materials about Mapbox and examples of its use.

### Mapbox resources


- [Mapbox - main page](https://www.mapbox.com/)
- [Mapbox Studio - GUI for constructing maps](https://www.mapbox.com/studio/)
- [Mapbox Studio - manual and tutorials](https://www.mapbox.com/help/studio-manual/)
- [Glossary of Mapbox and web-mapping related term](https://www.mapbox.com/mapbox-gl-js/api/)
- [Mapbox GL - Javascript library and style specification](https://www.mapbox.com/mapbox-gl-js/api/)


### Maps built with Mapbox platform


1. [Bathrooms in Washington D.C.](https://www.michaelandson.com/dc-metro-bathroom-map/)
2. [Moscow noise map](https://urbica.github.io/noisemap/)
3. [Digital archaelogy - map of deleted Geocities ecosystem](http://www.deletedcity.net/)
4. [Visulisation of Uber and Lyft trips in San Francisco](http://tncstoday.sfcta.org/)
5. [3D visualisation of restaurant complaints in NYC](https://labs.mapbox.com/bites/00304/)
6. [Public particpation in the Jezyce neighbourhood, Poznan](http://jezyce.geoprezentacja.pl/)
7. [Population mountains](https://pudding.cool/2018/12/3d-cities-story/)
8. [The Opportunity Atlas - USA](https://www.opportunityatlas.org/)

You can also, search on **Twitter** for hashtag [#BuiltWithMapbox](https://twitter.com/hashtag/BuiltWithMapbox?src=hash)

### Before you start

1. You will need a Mapbox account
2. It will be also easier if you have GitHub account


## II. Basics - creating a map

1. Crash course in web mapping - a simple map using Mapbox Studio
2. Introduction to Mapbox mapping ecosystem
3. External data and tilesets
4. Using tilesets to create map layers
5. Using Dataset Editor to create data
6. Publishing map draft

## III. More advanced functions - publishing, interactivity

1. Introduction to Mapbox GL JS library
2. A simple website with an interactive map
3. Publishing website through GitHub Pages
4. Popups!
5. How to learn from examples and tutorials

## IV. Make your own map!

By this point you probably know how to make a map. Now it's time to **make something usefull !** If you brought _your own data_ - use it. If you don't have data ready _create it now_ using [Dataset Editor](https://studio.mapbox.com/datasets/), through CSV file or use your favorite GIS software. You can also use any or all of the dataset that are _provided in this workshop_. In any case - try to **create a beatifull web map**. 

A couple guidelines before you start:

- Maps should be telling stories - stories make data readable and important
- 

## V. Sample datasets

1. [Polish voivodships with sample data](data/poland_voivodships.geojson)
_Administrative boundaries with sample attribute data._
2. [Demographic census data for Poznan](data/demography_poznan.geojson)
_Data from demographic census 2011 for Poznan area: Number of people, age, gender in 1x1 km grid._
3. [Student's life](data/student_traces.geojson)
_Two weeks of student's life GPS tracking data from a device weared by student of our faculty. Almost raw data with a couple of data columns added._
4. [Natural monuments in Poznan](data/national_monuments.csv)
_Natural monuments around Poznań Data from GDOŚ - this dataset is in proper CSV format for upload into Mapbox_
5. [Poznan in Flickr (2013)](data/flickr_data.geojson)
_Poznan in Flickr service in 2013. Data points from Flickr representing metadata of all photos with known coordinated. In database there are basic info like tags, description, date etc. Dirty dataseset that is the result of web api scraping._

## VI. After the workshop - some ideas

Maybe you liked this workshop, maybe not :) Either way I hope you like the idea of web mapping! Do not stop here and explore other possibilities:

- learn more about Mapbox through [official workshops on GitHUb](https://github.com/mapbox/workshops)
- there is an excellent [new workshop available](https://github.com/vakila/mapbox-concatenate-workshop) by [Anjana Vakil](https://twitter.com/AnjanaVakil). There is some great stuff there - see the scrollyteller template for creating story maps!
- Mapbox is nice but it has some limitations and a limited support in online Open Source GIS community (in other words - there are not many people willing to answer your question on Stack Overflow!). Explore other mapping libraries like [Leaflet]() or [OpenLayers]()

Contact me if you have any questions - I wll be more than happy to help you with your mapping project.
