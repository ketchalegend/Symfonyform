<?php

/* hubot_commands.html.twig */
class __TwigTemplate_3d7d0809088dc31b9b45c66a5c5d3e5c5c3f6c58e43702f251bea3023a224da7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hubot_commands.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'add' => array($this, 'block_add'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hubot_commands.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hubot_commands.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_add($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "add"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "add"));

        // line 6
        echo "<div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Getting Started With Hubot\" readonly></h2>
    <div class=\"card\">
        <div class=\"card-body\">
            <p>
            <h4 id=\"how-to-create-a-new-task\">How to create a new Task</h4>
            <p>
                • add|create (task-description) -> A task will be added with task description, default date and time.
                <br> • update (task-number) (task-description) @hh:mm,where task-number and time(hh:mm) are optional -> It will update the description of the mentioned task-number. If task number is not specified, last added task present in the context gets
                modified.<br> • delete (task number|all) ->If task number is not specified, last added task present in the context gets removed.<br> • time (task-number) (time in the format hh:mm) -If task number is not specified, last added task present
                in the context gets modified.<br> • date (task-number) (date in the format DD-MM-YYYY) ->If task number is not specified, last added task present in the context gets removed.<br> • date (task-number) today+n ->Modify date of task-number to
                current day + n number of days. If task number is not specified, last added task present in the context gets modified.<br> • subtask (description) for (parent-task-number) ->Add sub task for parent-task-number.<br> • list -> display the list
                of tasks on chronological basis.<br> • default time HH:MM ->Set HH:MM as default time.<br> • default date today+n -> Set default date to current date+n<br> • show (task number) -> Show details of the task. task_number = last added task, if
                task_number is not provided<br> • note (task number) (note-description) -> Add note for (task number). task_number = last added task, if task_number is not provided<br> • complete (task-number) -> Mark the specified task as complete. task_number
                = last added task, if task_number is not provided<br> • default date (DD-MM-YYYY) -> Set default date to (DD-MM-YYYY)<br></p>
            <h4 id=\"how-to-create-a-reminder\">How to create a Reminder</h4>
            <p>jessie remind at 5 PM to go home - Reminds you at 5 pm to go home<br> jessie remind in every 30 minutes to take a walk - Reminds you every 30 minutes to take a walk
                <br> jessie remind me tomorrow to document this better<br> jessie remind us in 15 minutes to end this meeting<br> jessie remind[er] (delete|remove|stop) [NUMBER]<br> jessie remind[er] repeat [NUMBER]<br> jessie remind[ers] (list|show|all)<br>            jessie repeat remind[er] [NUMBER]<br> jessie [delete|remove|stop] remind[er] [NUMBER]<br> jessie (list|show|all) remind[ers]</p>
            <h4 id=\"how-to-bookmark-a-url-to-easily-find-it-later\">How to Bookmark a Url to easily find it
                later</h4>
            <p>jessie bookmark add as - add a url to the robot brain<br> jessie bookmark delete - delete url from robot brain<br> jessie bookmark find - find a link by description<br> jessie bookmark list - list all of the links that are being tracked</p>
            <h4 id=\"how-to-create-daily-updates-of-what-you-do-and-be-able-to-see-it-later\">How to create Daily
                updates of what you do and be able to see it later</h4>
            <p>jessie my update is - Tell hubot about an update. You can tell hubot about how many updates you want in a day.<br> jessie get all daily updates for days ago - Gets all daily updates for all users for X days ago
                <br> jessie get all daily updates for last week for - Gets all daily updates for all users for last week (Maybe a good idea to always use this in private chat with me)<br> jessie get all daily updates for yesterday - Gets all daily updates
                for all users for yesterday
                <br> jessie get daily updates - Gets all daily updates for all users for today<br> jessie get daily updates by - Gets all of today’s updates for a user<br> jessie daily update help - List of commands<br> jessie remove daily updates by - Removes
                all updates by a given user<br> jessie remove daily updates for room - Removes all updates for the current room<br> jessie remove daily updates on by - Removes all updates on a given date by a given user</p>
            <h4 id=\"how-to-create-a-vote-to-get-everyones-opinion\">How to create a Vote to get everyones
                opinion</h4>
            <p>jessie vote for N - where N is the choice number or the choice name<br> jessie start multivote item1, item2, item3, … - start a multi vote (users can cast one vote per choice)
                <br> jessie start vote item1, item2, item3, … - start a standard vote (users can cast one vote)<br> jessie show choices<br> jessie show votes - shows current votes<br> jessie end vote</p>
            <h4 id=\"know-what-roles-you-have\">Know what roles you have</h4>
            <p>jessie list assigned roles - List all assigned roles<br> jessie doesn’t have role - Removes a role from a user<br> jessie has role - Assigns a role to a user<br> jessie what roles do I have - Find out what roles you have<br> jessie what roles
                does have - Find out what roles a user has<br> jessie who has role - Find out who has the given role</p>
            <h4 id=\"what-are-the-rules\">What are the rules</h4>
            <p>jessie the rules - Make sure hubot still knows the rules.</p>
            <h4 id=\"maps-you-on-google\">Maps you on Google</h4>
            <p>jessie map me - Returns a map view of the area returned by query.</p>
            <h4 id=\"help-command\">Help Command</h4>
            <p>jessie help - Displays all of the help commands that this bot knows about.<br> jessie help - Displays all help commands that match .</p>
            <h4 id=\"whois-query\">whois query</h4>
            <p>jessie whois <a href=\"http://google.com\">google.com</a> - </p>
            <h4 id=\"wiki-search\">wiki search</h4>
            <p>jessie wiki search - Returns the first 5 Wikipedia articles matching the search <br> jessie wiki summary </p>
            <article> - Returns a one-line description about
                <article></article>
            </article>
            <p></p>
            <h4>Get roomid</h4>
            <p>roomid - Displays the id for the room<br> roomid - Displays the id for the target room</p>
            </p>
        </div>
    </div>

</div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hubot_commands.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block add %}
<div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Getting Started With Hubot\" readonly></h2>
    <div class=\"card\">
        <div class=\"card-body\">
            <p>
            <h4 id=\"how-to-create-a-new-task\">How to create a new Task</h4>
            <p>
                • add|create (task-description) -> A task will be added with task description, default date and time.
                <br> • update (task-number) (task-description) @hh:mm,where task-number and time(hh:mm) are optional -> It will update the description of the mentioned task-number. If task number is not specified, last added task present in the context gets
                modified.<br> • delete (task number|all) ->If task number is not specified, last added task present in the context gets removed.<br> • time (task-number) (time in the format hh:mm) -If task number is not specified, last added task present
                in the context gets modified.<br> • date (task-number) (date in the format DD-MM-YYYY) ->If task number is not specified, last added task present in the context gets removed.<br> • date (task-number) today+n ->Modify date of task-number to
                current day + n number of days. If task number is not specified, last added task present in the context gets modified.<br> • subtask (description) for (parent-task-number) ->Add sub task for parent-task-number.<br> • list -> display the list
                of tasks on chronological basis.<br> • default time HH:MM ->Set HH:MM as default time.<br> • default date today+n -> Set default date to current date+n<br> • show (task number) -> Show details of the task. task_number = last added task, if
                task_number is not provided<br> • note (task number) (note-description) -> Add note for (task number). task_number = last added task, if task_number is not provided<br> • complete (task-number) -> Mark the specified task as complete. task_number
                = last added task, if task_number is not provided<br> • default date (DD-MM-YYYY) -> Set default date to (DD-MM-YYYY)<br></p>
            <h4 id=\"how-to-create-a-reminder\">How to create a Reminder</h4>
            <p>jessie remind at 5 PM to go home - Reminds you at 5 pm to go home<br> jessie remind in every 30 minutes to take a walk - Reminds you every 30 minutes to take a walk
                <br> jessie remind me tomorrow to document this better<br> jessie remind us in 15 minutes to end this meeting<br> jessie remind[er] (delete|remove|stop) [NUMBER]<br> jessie remind[er] repeat [NUMBER]<br> jessie remind[ers] (list|show|all)<br>            jessie repeat remind[er] [NUMBER]<br> jessie [delete|remove|stop] remind[er] [NUMBER]<br> jessie (list|show|all) remind[ers]</p>
            <h4 id=\"how-to-bookmark-a-url-to-easily-find-it-later\">How to Bookmark a Url to easily find it
                later</h4>
            <p>jessie bookmark add as - add a url to the robot brain<br> jessie bookmark delete - delete url from robot brain<br> jessie bookmark find - find a link by description<br> jessie bookmark list - list all of the links that are being tracked</p>
            <h4 id=\"how-to-create-daily-updates-of-what-you-do-and-be-able-to-see-it-later\">How to create Daily
                updates of what you do and be able to see it later</h4>
            <p>jessie my update is - Tell hubot about an update. You can tell hubot about how many updates you want in a day.<br> jessie get all daily updates for days ago - Gets all daily updates for all users for X days ago
                <br> jessie get all daily updates for last week for - Gets all daily updates for all users for last week (Maybe a good idea to always use this in private chat with me)<br> jessie get all daily updates for yesterday - Gets all daily updates
                for all users for yesterday
                <br> jessie get daily updates - Gets all daily updates for all users for today<br> jessie get daily updates by - Gets all of today’s updates for a user<br> jessie daily update help - List of commands<br> jessie remove daily updates by - Removes
                all updates by a given user<br> jessie remove daily updates for room - Removes all updates for the current room<br> jessie remove daily updates on by - Removes all updates on a given date by a given user</p>
            <h4 id=\"how-to-create-a-vote-to-get-everyones-opinion\">How to create a Vote to get everyones
                opinion</h4>
            <p>jessie vote for N - where N is the choice number or the choice name<br> jessie start multivote item1, item2, item3, … - start a multi vote (users can cast one vote per choice)
                <br> jessie start vote item1, item2, item3, … - start a standard vote (users can cast one vote)<br> jessie show choices<br> jessie show votes - shows current votes<br> jessie end vote</p>
            <h4 id=\"know-what-roles-you-have\">Know what roles you have</h4>
            <p>jessie list assigned roles - List all assigned roles<br> jessie doesn’t have role - Removes a role from a user<br> jessie has role - Assigns a role to a user<br> jessie what roles do I have - Find out what roles you have<br> jessie what roles
                does have - Find out what roles a user has<br> jessie who has role - Find out who has the given role</p>
            <h4 id=\"what-are-the-rules\">What are the rules</h4>
            <p>jessie the rules - Make sure hubot still knows the rules.</p>
            <h4 id=\"maps-you-on-google\">Maps you on Google</h4>
            <p>jessie map me - Returns a map view of the area returned by query.</p>
            <h4 id=\"help-command\">Help Command</h4>
            <p>jessie help - Displays all of the help commands that this bot knows about.<br> jessie help - Displays all help commands that match .</p>
            <h4 id=\"whois-query\">whois query</h4>
            <p>jessie whois <a href=\"http://google.com\">google.com</a> - </p>
            <h4 id=\"wiki-search\">wiki search</h4>
            <p>jessie wiki search - Returns the first 5 Wikipedia articles matching the search <br> jessie wiki summary </p>
            <article> - Returns a one-line description about
                <article></article>
            </article>
            <p></p>
            <h4>Get roomid</h4>
            <p>roomid - Displays the id for the room<br> roomid - Displays the id for the target room</p>
            </p>
        </div>
    </div>

</div>
</div>
</div>
{% endblock %}




", "hubot_commands.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\hubot_commands.html.twig");
    }
}
