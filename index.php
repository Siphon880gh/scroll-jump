<!DOCTYPE html>
<?php?>
<html lang="en">
  <head>
   <title>Demo: Scroll Jump</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- jQuery and Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-1.9.1.min.js" ></script>

    <script src="js/vendors/scroll-jump/scroll-jump.js"></script>
    <link rel="stylesheet" href="js/vendors/scroll-jump/scroll-jump.css"></link>

    <style>
    .section {
      margin-top: 20px;
    }
    </style>

</head>
    <body>
        <div id="shortcut-panels" style="display:none; position:fixed; bottom:20px; right:0;">
          <select name="" id="" 
              onfocus='$(window).data("shortcuts-is-opened", true);' 
              onblur='$(window).data("shortcuts-is-opened", false);'
              onchange='scrollToElement(event.target.value);'
            >
            <option>* Scroll to *</option>
            <option value="#sect-1">Section 1</option>
            <option value="#sect-2">Section 2</option>
            <option value="[data-hook=sect-3]">Section 3</option>
          </select>
        </div>

        <div class="container">
          <h3>Demo: Scroll Jump</h3>
          <aside><b>By Weng Fei Fung</b>. When you scroll down a long page with many sections, you have to put in much effort to find the section. With this tool, a dropdown appears for a short while as you scroll, and that dropdown lets you select a section to jump to. So you can either scroll or have it scroll to the section for you.</aside>

          <div class="section">
            <div id="sect-1" class="header">Section 1</div>
            <div class="body">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet ipsum a interdum consequat. Duis purus urna, porttitor ut vehicula vitae, egestas interdum sapien. Donec laoreet ipsum placerat condimentum volutpat. Mauris porta, lorem eu tempor ultricies, massa ex sollicitudin nisi, in fermentum nisl lorem vel felis. Vestibulum auctor magna eleifend enim sodales, quis dignissim augue semper. Proin a feugiat justo. Integer id ligula et augue sagittis tempus. Curabitur volutpat ligula nulla, pellentesque tristique felis ultrices ac. Quisque rhoncus magna luctus mollis congue. Suspendisse sagittis dolor odio, ac condimentum purus semper eu. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet ipsum a interdum consequat. Duis purus urna, porttitor ut vehicula vitae, egestas interdum sapien. Donec laoreet ipsum placerat condimentum volutpat. Mauris porta, lorem eu tempor ultricies, massa ex sollicitudin nisi, in fermentum nisl lorem vel felis. Vestibulum auctor magna eleifend enim sodales, quis dignissim augue semper. Proin a feugiat justo. Integer id ligula et augue sagittis tempus. Curabitur volutpat ligula nulla, pellentesque tristique felis ultrices ac. Quisque rhoncus magna luctus mollis congue. Suspendisse sagittis dolor odio, ac condimentum purus semper eu. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet ipsum a interdum consequat. Duis purus urna, porttitor ut vehicula vitae, egestas interdum sapien. Donec laoreet ipsum placerat condimentum volutpat. Mauris porta, lorem eu tempor ultricies, massa ex sollicitudin nisi, in fermentum nisl lorem vel felis. Vestibulum auctor magna eleifend enim sodales, quis dignissim augue semper. Proin a feugiat justo. Integer id ligula et augue sagittis tempus. Curabitur volutpat ligula nulla, pellentesque tristique felis ultrices ac. Quisque rhoncus magna luctus mollis congue. Suspendisse sagittis dolor odio, ac condimentum purus semper eu. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquet ipsum a interdum consequat. Duis purus urna, porttitor ut vehicula vitae, egestas interdum sapien. Donec laoreet ipsum placerat condimentum volutpat. Mauris porta, lorem eu tempor ultricies, massa ex sollicitudin nisi, in fermentum nisl lorem vel felis. Vestibulum auctor magna eleifend enim sodales, quis dignissim augue semper. Proin a feugiat justo. Integer id ligula et augue sagittis tempus. Curabitur volutpat ligula nulla, pellentesque tristique felis ultrices ac. Quisque rhoncus magna luctus mollis congue. Suspendisse sagittis dolor odio, ac condimentum purus semper eu.
            </div>
          </div>

          <div class="section">
            <div id="sect-2" class="header">Section 2</div>
            <div class="body">
            Morbi a lacus est. Morbi ultrices nec sapien ut faucibus. Phasellus volutpat eu neque in aliquam. Nunc non tincidunt risus, efficitur sodales mauris. Praesent gravida id metus at hendrerit. Sed vehicula urna vel urna euismod, non aliquam purus pretium. Etiam sit amet sapien aliquam, commodo ante sit amet, efficitur est. Praesent fermentum nisi id placerat pellentesque. Nulla finibus ultricies efficitur. Maecenas rutrum varius luctus. Phasellus a imperdiet purus. Phasellus non elit est. Donec quis semper velit. Aliquam ullamcorper suscipit consequat.
            Morbi a lacus est. Morbi ultrices nec sapien ut faucibus. Phasellus volutpat eu neque in aliquam. Nunc non tincidunt risus, efficitur sodales mauris. Praesent gravida id metus at hendrerit. Sed vehicula urna vel urna euismod, non aliquam purus pretium. Etiam sit amet sapien aliquam, commodo ante sit amet, efficitur est. Praesent fermentum nisi id placerat pellentesque. Nulla finibus ultricies efficitur. Maecenas rutrum varius luctus. Phasellus a imperdiet purus. Phasellus non elit est. Donec quis semper velit. Aliquam ullamcorper suscipit consequat.
            Morbi a lacus est. Morbi ultrices nec sapien ut faucibus. Phasellus volutpat eu neque in aliquam. Nunc non tincidunt risus, efficitur sodales mauris. Praesent gravida id metus at hendrerit. Sed vehicula urna vel urna euismod, non aliquam purus pretium. Etiam sit amet sapien aliquam, commodo ante sit amet, efficitur est. Praesent fermentum nisi id placerat pellentesque. Nulla finibus ultricies efficitur. Maecenas rutrum varius luctus. Phasellus a imperdiet purus. Phasellus non elit est. Donec quis semper velit. Aliquam ullamcorper suscipit consequat.
            Morbi a lacus est. Morbi ultrices nec sapien ut faucibus. Phasellus volutpat eu neque in aliquam. Nunc non tincidunt risus, efficitur sodales mauris. Praesent gravida id metus at hendrerit. Sed vehicula urna vel urna euismod, non aliquam purus pretium. Etiam sit amet sapien aliquam, commodo ante sit amet, efficitur est. Praesent fermentum nisi id placerat pellentesque. Nulla finibus ultricies efficitur. Maecenas rutrum varius luctus. Phasellus a imperdiet purus. Phasellus non elit est. Donec quis semper velit. Aliquam ullamcorper suscipit consequat.
            </div>
          </div>

          <div class="section">
            <div data-hook="sect-3" class="header">Section 3</div>
            <div class="body">
            Praesent eget aliquet neque, vitae rutrum felis. Aenean ut magna sed arcu rutrum efficitur. Sed in lacus commodo, vehicula erat ut, varius magna. Suspendisse semper massa ut felis ornare, et molestie orci auctor. Fusce arcu ligula, laoreet at tincidunt in, feugiat vel nunc. Donec sit amet odio ac tortor pharetra luctus. Donec malesuada convallis nunc, quis tristique nibh molestie id. Praesent et condimentum ligula, suscipit cursus sem.
            Praesent eget aliquet neque, vitae rutrum felis. Aenean ut magna sed arcu rutrum efficitur. Sed in lacus commodo, vehicula erat ut, varius magna. Suspendisse semper massa ut felis ornare, et molestie orci auctor. Fusce arcu ligula, laoreet at tincidunt in, feugiat vel nunc. Donec sit amet odio ac tortor pharetra luctus. Donec malesuada convallis nunc, quis tristique nibh molestie id. Praesent et condimentum ligula, suscipit cursus sem.
            Praesent eget aliquet neque, vitae rutrum felis. Aenean ut magna sed arcu rutrum efficitur. Sed in lacus commodo, vehicula erat ut, varius magna. Suspendisse semper massa ut felis ornare, et molestie orci auctor. Fusce arcu ligula, laoreet at tincidunt in, feugiat vel nunc. Donec sit amet odio ac tortor pharetra luctus. Donec malesuada convallis nunc, quis tristique nibh molestie id. Praesent et condimentum ligula, suscipit cursus sem.
            Praesent eget aliquet neque, vitae rutrum felis. Aenean ut magna sed arcu rutrum efficitur. Sed in lacus commodo, vehicula erat ut, varius magna. Suspendisse semper massa ut felis ornare, et molestie orci auctor. Fusce arcu ligula, laoreet at tincidunt in, feugiat vel nunc. Donec sit amet odio ac tortor pharetra luctus. Donec malesuada convallis nunc, quis tristique nibh molestie id. Praesent et condimentum ligula, suscipit cursus sem.
            </div>
          </div>

        </div> <!-- /container -->
        
        <!-- Js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>

    </body>
</html>