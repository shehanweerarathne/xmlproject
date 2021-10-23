<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
		<head>
		<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
		</head>
			<body>
				<div class="container p-3">
					<div class="border p-3">
						<div asp-validation-summary="ModelOnly" class="text-danger"></div>
						<h2 class="text-info pl-3">All Books</h2>
					</div><br></br>

				<table class="table table-striped">


						<tr>
							<th>Id</th>
							<th>Title</th>
							<th>Genre</th>
							<th>Author</th>
							<th>Price</th>
							<th>Action</th>

						</tr>
						
						
						

					<xsl:for-each select="books/book">
					
						<tr>
							<td><xsl:value-of select="@id"/></td>
							<td><xsl:element name="a">
								<xsl:attribute name="href">view.php?id=<xsl:value-of select="@id" /></xsl:attribute><xsl:value-of select="title" /></xsl:element></td>
							<td><xsl:value-of select="genre" /></td>
							<td><xsl:value-of select="author" /></td>
							<td><xsl:value-of select="price" /></td>
							<td>
								<xsl:element name="a">
									<xsl:attribute name="href">edit.php?id=<xsl:value-of select="@id" /></xsl:attribute><xsl:attribute
										name="class">btn btn-primary</xsl:attribute>
									Edit</xsl:element>
								<xsl:element name="a">
									<xsl:attribute name="href">delete.php?id=<xsl:value-of select="@id" /></xsl:attribute><xsl:attribute
										name="onclick">return confirm('Are you sure?')</xsl:attribute><xsl:attribute
										name="class">btn btn-danger</xsl:attribute>
									Delete</xsl:element>

							</td>
						</tr>
					</xsl:for-each>
				</table>
					<div class="col text-center">
						<xsl:element name="a">
							<xsl:attribute name="href">add.php</xsl:attribute><xsl:attribute name="class">btn btn-info w-25</xsl:attribute>
							Add New Book</xsl:element>
					</div>

				</div>

			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>