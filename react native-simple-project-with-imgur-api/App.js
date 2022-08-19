// import React from "react";
// import {
//   StyleSheet,
//   Text,
//   View,
//   SafeAreaView,
//   Image,
//   TouchableOpacity,
//   Button,
//   Alert,
//   Platform,
//   StatusBar,
// } from "react-native";
// import Home from "./components/home";
import Profile from "./components/profile";
// import { NavigationContainer } from "@react-navigation/native";
// import { createNativeStackNavigator } from "@react-navigation/native-stack";
// //import { createStackNavigator } from "@react-navigation/stack";
// // const RootStack = createStackNavigator({
// //   Home: Home,
// //   //    //Profile: Profile
// // });
// // ALNqDKXbHmAPrSklSlN4tg
// // ig0gFbh_xAJd7hY2NtQMpjUUkMgZbQ
// //client-id  a9a255327f57be5
// // secret-   0f004505c4b419d28e8f9f6f42281396179279f9
// export default class App extends React.Component {
//   render() {
//     const Stack = createNativeStackNavigator();
//     return (
//       <NavigationContainer>
//         <Stack.Navigator>
//           <Stack.Screen name='Home' component={Home} />
//           <Stack.Screen name='Profile' component={Profile} />
//         </Stack.Navigator>
//       </NavigationContainer>
//     );
//   }
// }
// const styles = StyleSheet.create({
//   container: {
//     flex: 1,
//     backgroundColor: "dodgerblue",
//     fontSize: "40px",
//     paddingTop: Platform.OS === "android" ? StatusBar.currentHeight : 0,
//   },
//   myText: {
//     fontSize: 40,
//     fontWeight: "bold",
//   },
// });
// In App.js in a new project

import * as React from "react";
import { View, Text, Button } from "react-native";
import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";

function HomeScreen({ navigation }) {
  return (
    <View style={{ flex: 1, alignItems: "center", justifyContent: "center" }}>
      <Text>Home Screen</Text>
      <Button title='profile' onPress={() => navigation.navigate("Profile")} />
    </View>
  );
}

const Stack = createNativeStackNavigator();

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator>
        <Stack.Screen name='Home' component={HomeScreen} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

export default App;
