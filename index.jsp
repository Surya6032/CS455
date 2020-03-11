<%@page import="java.util.ArrayList" %>
<html>
    <body>
        <form action="index.jsp" method=POST>
            <input name="itemid" type="text"/>
            <input type="submit" value="Add"/>
        </form>
        
        Your cart has:
        <%= request.getQueryString() %>
        <%= request.getParameter("itemid") %>

        <%
            // get the cart out of the session
            ArrayList<String> cart = 
                (ArrayList<String>) session.getAttribute("cart");

            // if not found, create it
            if (cart == null) {
                cart = new ArrayList<String>();
            }

            // save the item to the cart
            String item = request.getParameter("itemid");
            if (item != null) {
                cart.add(item);
            }

            // save the cart in the session
            session.setAttribute("cart", cart);

            // display the contents of the cart
            out.println("<ul>");
            for (String thing : cart) {
                out.println("<li>" + thing + "</li>");
            }
            out.println("</ul>");
        %>
    </body>
</html>

