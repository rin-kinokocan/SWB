# SWB　Simple Web-page Base

SWB is an object-oriented and lightweight PHP framework for building web pages.

## Purpose of SWB
Create web pages in an object-oriented mannar, and in PHP.

## Why SWB?
SWB is so lightweight that load time won't matter much.
You can do whatever complicated things without worrying about the overhead of the base framework.
If you want to build your system but you don't feel like starting from scratch,
SWB is for you.

## What does SWB contain?
There are two essential classes in SWB, `swb_renderer`, and `swb_selector`.
`swb_renderer` renders an actual web page (or rather, selects collect templates).
`swb_selector` is a factory class of `swb_renderer`.
`swb_renderer` is just a base class, so you have to extend it for your needs.

## What will SWB do?
SWB works in two following steps:
1. Selecting a Renderer.
2. Rendering the web page.

Someone might say that it looks like how MVC framework works, but I don't think
it does because I didn't understand MVC when I made this.
