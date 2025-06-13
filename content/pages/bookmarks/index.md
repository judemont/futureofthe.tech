+++
title = "My Bookmarks"
path = "bookmarks"
+++

Here is a list of content that I find interesting and that I recommend to you.

{% admonition(type="info", title="infos") %}
This list includes texts that present viewpoints I find interesting. This does not necessarily mean that I agree with their ideas. The opinions expressed in these texts are solely those of their authors.
{% end %}

- [Blog Posts](#blog-posts)
- [Interesting Projects](#interesting-projects)
- [Websites](#websites)
- [Webtoons](#webtoons)

## Blog Posts
{{ projects(path="blogposts.toml", format="toml") }}

## Interesting Projects
{{ projects(path="projects.toml", format="toml") }}

## Websites
{{ projects(path="websites.toml", format="toml") }}

## Webtoons
{{ projects(path="webtoons.toml", format="toml") }}
