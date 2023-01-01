import { Routes, Route, BrowserRouter } from "react-router-dom";
import ProductList from "./components/ProductList";

function App() {
  return (
    <BrowserRouter>
      <div className="container">
        <Routes>
          <Route exact path="/" element={<ProductList />} />
        </Routes>
      </div>
    </BrowserRouter>
  );
}

export default App;
