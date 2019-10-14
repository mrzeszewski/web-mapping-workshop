## External data and tilesets
Tilesets are the building blocks of Mapbox maps. They consist of vector data that is generalized into regular square grid at 22 zoom levels. Maps are build by associating style to tilesets - there are analogs of map layers in Desktop GIS. 
Tilesets can be accessed outside Mapbox Studio environment through Mapbox GL JS library and other mobile libraries. 

To create a tileset you have two options - either you create it from previously uploaded dataset (see the next chapter) or more commonly you can convert uploaded data. Mapbox accept various formats but there are some caveats and limitations. See the most recent [documentaion](https://docs.mapbox.com/help/troubleshooting/uploads/) because there are constant changes and more formats are introduced.  If something is not working try converting the data outside the Mapbox - and while you are doing it you can simplify the data and reproject it into Web Mercator. GeoJSON format is the most stable format from my personal experience.

Try to upload some data:

 1. Download three sample layers:
 2. You can start uploading new file even when the previous one is still being processed.
 3. After processing is finished you will have three new shiny Tilesets that you can add to your map.

In the next step we will add them to the map. 
