<!DOCTYPE html>



<html>

    <head>
    
        <title>Form Test</title>
        
        <link rel="icon" type="image/x-icon" href="favicon.ico?" />
        <script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="styleForm.css"/>
    
    </head>
    
    
    
    <body>
    
        <form action="success.php" method="post">
        
            <div class="form-group">
            
                <label class="control-label col-md-1 text-right" for="email">Email:</label>
                <div class="col-md-11">
                
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                
                </div>
            
            </div>
            
            <div class="form-group">
            
                <label class="control-label col-md-1 text-right" for="name">Name:</label>
                
                <div class="col-md-11">
                
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                
                </div>
            
            </div>
            
            <div class="form-group">
            
                <label class="control-label col-md-1 text-right">Message:</label>
                
                <div class="col-md-11">
                
                   <textarea class="form-control" rows="5" id="message"></textarea>
                    
                </div>
            
            </div>
            
            <div class="form-group">
            
                <div class="col-md-12 text-right">
                
                    <button type="submit" class="btn btn-default">Send</button>
                
                </div>
            
            </div>
        
        </form>
    
    </body>

</html>