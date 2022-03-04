# 🎲 Random Image

[![Web](https://img.shields.io/badge/web-blue?logo=w3c)](https://github.com/topics/web)
[![PHP](https://img.shields.io/badge/php-blue?logo=php)](https://github.com/topics/php)

HTTP Web API that responds with a random [image](https://ambratolm.cf).

[**🌐 View Live**](https://random-artwork.herokuapp.com)

## 📂 Endpoints

### 📁 Directory Endpoint

**GET** random image from **Local Directory** (`./dir/images`).

- **`🌐 ./dir`** : returns **Image File**.
- **`🌐 ./dir?json`** : returns **JSON File** with this data:
  - `title` : friendly image title (ex: `"Wracurd"`)
  - `name` : image file name with extension (ex: `"wracurd_paint_p_ft.jpg"`).
  - `type` : image file mime type (example: `"image/jpeg"`).
  - `url` : image file full url (example: `"https://random-image.com/dir/images/wracurd_paint_p_ft.jpg"`).

### 📁 RSS Endpoint

**GET** random image from [**RSS Feed**](https://feeds.feedburner.com/ambratolm-cf).

- **`🌐 ./rss`** : returns **Image File**.

## JSON Generation

The JSON file data is **fully based** on the **image file**.

- `title` is extracted from the image file name following this method:
  - If the name contains an underscore `_`, only the part that preceeds the underscore `_` is taken. Else, the full name is taken.
  - The hyphens `-` in the name are replaced with spaces.
  - The first word is capitalized.
- `title` extraction example:
  - `quest in-the-City_paint_p_ft`
  - → `quest in-the-City`
  - → `quest in the City`
  - → `Quest in the City`

## 🚀 Development

### 🏭 Environment

- Runtime: [**XAMPP**](https://www.apachefriends.org)
- Editor: [**Sublime Text**](https://www.sublimetext.com)

### 🌑 Backend

- ⚛️ Core: [**PHP**](https://github.com/php)

## 📄 License

- **Code**: [MIT](./LICENSE).
- **Artworks**: [© Ambratolm](https://ambratolm.cf).