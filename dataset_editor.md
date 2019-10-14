## Datasest Editor

Apart from using data created elsewhere (in GIS software or in spreadsheet) you can create simple data in Mapbox web GUI.
This tool is called [Dataset Editor](https://www.mapbox.com/studio/datasets/). 

1. When in [Mapbox Studio]{https://studio.mapbox.com/) click on the **Dataset** tab.
2. Datasets are stored in the [GeoJSON format](https://www.mapbox.com/help/define-geojson). 
3. There you can **Create Dataset** by uploading data (in GeoJSON, JSON or CSV) or (and this is a default behavior) you can create a Blank Dataset and add some data using GUI. 
4. When you choose to create a Blank Dataset you can add points, lines and polygons as well as create properties to assign to them.
5. Be aware that although you can include together points, lines and polygons in a single datasest it is currently better to keep  them separated (I've encountered some strange behavior while doing this).
6. When you are finished you can **Save** the datasest and then export it to a **Tileset** - which in turn can be used on the map. 
