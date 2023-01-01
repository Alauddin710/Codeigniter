/* eslint-disable react-hooks/exhaustive-deps */
import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

const ProductList = () => {
  const [products, setProducts] = useState([]);

  useEffect(() => {
    getProducts();
  }, []);

  const getProducts = async () => {
    const products = await axios.get("http://localhost:8080/products");
    setProducts(products.data.products);
  };
  // console.log(products);
  const deleteProduct = async (id) => {
    await axios.delete(`http://localhost:8080/products/${id}`);
    getProducts();
  };

  return (
    <div>
      <Link to="/add" className="button is-primary mt-5">
        Add New
      </Link>
      <table className="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Product Details</th>
            <th>Product Price</th>
            <th>Product Image</th>
            <th>Product Category</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {products.map((product, index) => (
            <tr key={product.id}>
              <td>{index + 1}</td>
              <td>{product.product_name}</td>
              <td>{product.product_details}</td>
              <td>{product.product_price}</td>
              <td>
                <img
                  src={`http://localhost:8080/${product.product_image}`}
                  width="100px"
                />{" "}
              </td>
              <td>{product.product_category}</td>
              <td>
                <Link to={`/edit/${product.id}`} className="btn btn-success">
                  Edit
                </Link>
                <button
                  onClick={() => deleteProduct(product.id)}
                  className="btn btn-danger"
                >
                  Delete
                </button>
              </td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ProductList;
