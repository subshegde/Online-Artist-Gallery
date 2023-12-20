<jsp:include page="metatag.jsp"></jsp:include>
<jsp:include page="header.jsp"></jsp:include>
<jsp:include page="sidebar.jsp"></jsp:include>
				
            <!-- Page Content -->
            <div id="page-content">
             <ul class="breadcrumb" data-spy="affix" data-offset-top="250">
                    <li>
                        <a href="index.html"><i class="glyphicon-display"></i></a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li>
                        <a href="#">Forms</a> <span class="divider"><i class="icon-angle-right"></i></span>
                    </li>
                    <li class="active"><a href="">View Gallery</a></li>
              </ul>
                <!-- END Breadcrumb -->

                        
                  
  <!-- Simple Gallery Block -->
                <div class="block block-themed">
                    <!-- Simple Gallery Title -->
                    <div class="block-title">
                        <h4><i class="icon-camera-retro"></i> View All Painting Gallery Details</h4>
                    </div>
                    <!-- END Simple Gallery Title -->

                    <!-- Simple Gallery Content -->
                    <div class="block-content">
                        <!--
                        Just create a div with the class .gallery. Inside put the images any way you like in a fluid grid.
                        If you would like to enable the lightbox, just add the value lightbox-gallery in the attribute data-toggle of the div. If you do that
                        make sure that you put your images inside links with the class .gallery-link and the href of your large image!
                        -->
                        <div class="gallery" data-toggle="lightbox-gallery">
                            <div class="row-fluid row-items">
                              <%@page import="java.sql.*"%>
<%@page import="shopping.artgallery"%>
<jsp:useBean id="s" class="shopping.artgallery"/>
<jsp:getProperty name="s" property="conn"/>
<%

ResultSet rs=s.st.executeQuery("select * from gallery_details");
while(rs.next())
{
String gname=rs.getString("gname");
String gpaint=rs.getString("upload_paint");
String price=rs.getString("price");
String status=rs.getString("status");
%>
							    <div class="span3">
                                    <a href="../artist/paint_images/<%=gpaint%>" class="gallery-link">
									<%=gname%> 
                                        <img src="../artist/paint_images/<%=gpaint%>" alt="image" title="<%=gname%>">
										<br><font color="#000000">Price:<b><%=price%></b></font>&nbsp;&nbsp;&nbsp;Status: <font color="#FF0000"> <%=status%></font>
                                    </a>
                                </div>
								<%
								}
								%>
                              
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- END Simple Gallery Content -->
                </div>
                <!-- END Simple Gallery Block -->            <!-- END Page Content -->
			
			

       
    </body>
</html>
<jsp:include page="footer.jsp"></jsp:include>
