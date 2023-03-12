<!DOCTYPE html>
<html>
    <?php 
        class Chef{
            function makeChicken(){
                echo "Making chicken dinner<br>";
            }

            function makeSalad(){
                echo "Making fruit salad<br>";
            }

            function makeSpecialDish(){
                echo "Making the best fucking dish you've ever tasted!<br>";
            }

            
        }

        class ItalianChef extends Chef{
            function makePasta(){
                echo "Want pasta?No, bitch lasagna!<br>";
            }

            function makeSpecialDish(){
                echo "Making an awesome Italian soup";
            }
        }
        $salam= new Chef();
        $salam->makeSpecialDish();

        $jabbar= new ItalianChef();
        $jabbar->makePasta();
        $jabbar->makeChicken();
        $jabbar->makeSpecialDish();
        
    ?>
</html>