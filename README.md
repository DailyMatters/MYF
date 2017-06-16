### Simplex

Simple PHP framework using Symfony components. Just the barebones needed to create a REST API. Because Symfony at is core is composed of separate libraries called *components* which can be reused in any PHP application, we can use those same components to create a custom framework.

For this particular framework the components used were:

* Http Foundation - Defines an object-oriented layer for the HTTP specification. It provides the **Request** and **Response** classes that we use to abstract the use of default PHP globals and echos and headers to return data.

* Routing - Maps an HTTP request to a set of configuration variables. Using this component allows us to load **Route** objects into as **UrlMatcher** that will map the requested URI to a matching route.

* Http Kernel - Provides the building blocks to create flexible and fast HTTP-based frameworks. This component intent is to convert the *Request* instance into a *Response* one, and provides several classes for us to achieve this. The most important is probably the *HttpKernelInterface* that provides only one method: **Handle**.

* EventDispatcher - Implements the Mediator pattern in a simple and effective way to make projects truly extensiblei ("The event dispatcher component provides tools that allow your application components to communicate with each other by dispatching events and listening to them").

* Dependency Injection - Allows us to standardize and centralize the way objects are constructed in our application.

These are the main dependencies in this framework, which take us to the following `composer.json` file:

```json
{
    "require": {
        "symfony/http-foundation": "^3.3",
        "symfony/routing": "^3.3",
        "symfony/http-kernel": "^3.3",
		"symfony/event-dispatcher": "^3.3",
        "symfony/dependency-injection": "^3.3"
    },
	"autoload": {
        "psr-4": { "": "src/" }
    }
}
```

#### Usage

Usage of this framework is pretty straight forward and you can find two examples of it on the `src/Hello` and `src/Calendar` folders.  It works just like every other MVC framework, especially like Symfony (can you guess why?)
