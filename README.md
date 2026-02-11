# WordPress Solar Theme - Blog Setup

Professional WordPress theme with complete blog system.

## 📝 Important Note

This repository contains the **theme files** (code), but **NOT the database** (blog posts, pages, settings).

**Why?** GitHub stores files, not databases. After cloning, you need to configure the blog.

---

## Blog Setup (5 minutes)

### 1. Activate the Theme

- Go to **Appearance → Themes**
- Activate **Tema Personal Solar**

### 2. Create Homepage

- Go to **Pages → Add New**
- Title: "Home"
- Don't select any template
- Publish

### 3. Create Blog Page

- Go to **Pages → Add New**
- Title: "Blog"
- **Page Attributes → Template → "Blog Traveler"**
- Publish

### 4. Configure Reading Settings

- Go to **Settings → Reading**
- Select "A static page"
- Homepage: Select "Home"
- Posts page: Select "Blog"
- Save changes

### 5. Create Posts

- Go to **Posts → Add New**
- Write title and content
- Add Featured Image (recommended 800x600px)
  - If you skip this, the theme will use a default image automatically
- Publish
- Repeat to create 2-3 posts

### 6. Create Menu

- Go to **Appearance → Menus**
- Create a new menu
- Add pages (Home, Blog, About, Services, Contact, Projects)
- Assign to "Primary Menu" location
- Save

**Done!** Your blog is now accessible at `/blog/`

---

## Blog Features

- ✅ Posts archive with 2-column grid
- ✅ Single post layout with sidebar
- ✅ Blog template with 3-column layout
- ✅ Automatic default images
- ✅ Pagination
- ✅ Categories and tags
- ✅ Responsive design
- ✅ Widgets support (search, categories, recent posts)

## Customizing the Blog Sidebar

1. Go to **Appearance → Widgets**
2. Find **"Blog Sidebar"** area
3. Add widgets:
   - Search
   - Categories
   - Recent Posts
   - Tag Cloud
   - Archives

---

## Theme Documentation

For complete theme documentation, see:
`wp-content/themes/tema-personal/README.md`

## Requirements

- WordPress 5.0+
- PHP 7.4+
- MySQL 5.6+

## License

GPL v2 or later
